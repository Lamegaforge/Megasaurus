<?php
namespace App\Providers;

use Illuminate\Support\Facades\Session;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;
use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\GenericResourceOwner;

class TwitchServiceProvider extends AbstractProvider
{
    use BearerAuthorizationTrait;
    private $urlAuthorize;
    private $urlAccessToken;
    private $urlResourceOwnerDetails;
    private $accessTokenMethod;
    private $accessTokenResourceOwnerId;
    private $scopeSeparator;
    private $scopes = null;
    private $responseError = 'error';
    private $responseCode;
    private $responseResourceOwnerId;

    public function __construct(array $options = [])
    {
        $possible = $this->getConfigurableOptions();
        $configured = array_intersect_key($options, array_flip($possible));
        foreach ($configured as $key => $value) {
            $this->$key = $value;
        }
        // Remove all options that are only used locally
        $options = array_diff_key($options, $configured);
        parent::__construct($options);
    }

    protected function getConfigurableOptions()
    {
        return ['accessTokenMethod',
            'accessTokenResourceOwnerId',
            'scopeSeparator',
            'responseError',
            'responseCode',
            'responseResourceOwnerId',
            'scopes',
        ];
    }

    public function registerLoggedUser($accessToken)
    {
        $resourceOwner = $this->getResourceOwner($accessToken);
        $user = $resourceOwner->toArray()['data'][0];
        Session::put('logged_user', encrypt($user));
    }

    public function getLoggedUser()
    {
        return decrypt(Session::get('logged_user'));
    }

    public function unregisterLoggedUser()
    {
        Session::remove('logged_user');
    }

    public function getBaseAuthorizationUrl()
    {
        return 'https://id.twitch.tv/oauth2/authorize';
    }

    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://id.twitch.tv/oauth2/token';
    }

    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://api.twitch.tv/helix/users';
    }

    public function getDefaultScopes()
    {
        return $this->scopes;
    }

    protected function getScopeSeparator()
    {
        return ' ';
    }

    protected function checkResponse(ResponseInterface $response, $data)
    {
        if (!empty($data[$this->responseError])) {
            $error = $data[$this->responseError];
            $code = $this->responseCode ? $data[$this->responseCode] : 0;
            throw new IdentityProviderException($error, $code, $data);
        }
    }

    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return new GenericResourceOwner($response, $this->responseResourceOwnerId);
    }

    protected function getDefaultHeaders()
    {
        return ['Client-ID' => $this->clientId, 'Accept' => 'application/vnd.twitchtv.v5+json'];
    }

    protected function getAuthorizationHeaders($token = NULL)
    {
        return ['Authorization' => 'Bearer ' . $token];
    }
}
