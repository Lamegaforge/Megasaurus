<?php

namespace App\Http\Controllers\Site;

use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class HomeController extends Controller
{

    private $loginService;

    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    /**
     * Show the application dashboard.
     *
     * @return View
     */
    public function home()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->loginService->login();
        }
//        return view('login');
    }
}
