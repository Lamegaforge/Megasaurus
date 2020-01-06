<?php


namespace App\Services;


use Depotwarehouse\OAuth2\Client\Twitch\Entity\TwitchUser;
use Depotwarehouse\OAuth2\Client\Twitch\Provider\Twitch;
use Exception;

class LoginService
{
    private $provider;

    public function __construct()
    {
        $this->provider = new Twitch([
            'clientId' => env("TWITCH_CLIENT_ID"),
            'clientSecret' => env("TWITCH_CLIENT_SECRET"),
            'redirectUri' => route('home')
        ]);
    }

    public function login()
    {
        try {
            dd($_POST['_token']);
            if (!empty($_POST['_token'])) {
                $token = $this->provider->getAccessToken("authorization_code", [
                    'code' => $_POST['_token']
                ]);

                /** @var TwitchUser $user */
                $user = $this->provider->getResourceOwner($token);

//                dd($user->toArray());
//                $user->getDisplayName();
//                $user->getId();
//                $user->getType();
//                $user->getBio();
//                $user->getEmail();
//                $user->getPartnered();
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
