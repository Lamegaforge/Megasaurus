<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Routing\Controller;
use App\Managers\Oauth\OauthManager;
use App\Services\AuthentificationService;
use App\Http\Requests\ConsumeOauthRequest;

class OauthController extends Controller
{
    public function login()
    {
        $authorizationUrl = app(OauthManager::class)->driver('helix')->getAuthorizationUrl();

        return View::make('oauth.login', [
            'url' => $authorizationUrl,
        ]);
    }

    public function consume(ConsumeOauthRequest $request)
    {
        app(OauthManager::class)->driver('helix')->checkAuthorizationToken($request->get('state'));

        $resourceOwner = app(OauthManager::class)->driver('helix')->consume($request->get('code'));

        app(AuthentificationService::class)->loginByResource($resourceOwner);
    }
}
