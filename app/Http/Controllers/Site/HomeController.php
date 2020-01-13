<?php

namespace App\Http\Controllers\Site;

use App\Providers\TwitchServiceProvider;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\HTTP\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class HomeController extends Controller
{
    /** @var TwitchServiceProvider $provider */
    private $provider;

    public function __construct()
    {
        $this->provider = new TwitchServiceProvider([
            'clientId' => env('TWITCH_CLIENT_ID'),
            'clientSecret' => env('TWITCH_CLIENT_SECRET'),
            'redirectUri' => 'http://megasaurus.test:8080/',
        ]);
    }

    /**
     * Megasaurus'Home
     *
     * @param Request $request
     * @return Redirector|View
     */
    public function home(Request $request)
    {
        if ($request->isMethod('GET') && $request->has('code')) {
            if (!$request->has('state') || (session('state') && $request->get('state') !== session('state'))) {
                if (session('state')) {
                    Session::remove('state');
                }
                dd('Invalid state');
            } else {
                try {
                    $accessToken = $this->provider->getAccessToken('authorization_code', ['code' => $request->get('code')]);
                    $this->provider->registerLoggedUser($accessToken);
                    $user = $this->provider->getLoggedUser();
                    // You can now create authenticated API requests through the provider.
                    //$request = $provider->getAuthenticatedRequest(
                    //    'GET',
                    //    'https://api.twitch.tv/kraken/user',
                    //    $accessToken
                    //);

                    return view('home', ['user' => $user]);
                } catch (Exception $e) {
                    exit('Caught exception: ' . $e->getMessage());
                }
            }
        }

        return redirect('login');
    }

    /**
     * OAuth Login to Twitch
     *
     * @return View
     */
    public function login()
    {
        $url = $this->provider->getAuthorizationUrl();
        Session::put('state', $this->provider->getState());
        return view('login', ['url' => $url]);
    }
}
