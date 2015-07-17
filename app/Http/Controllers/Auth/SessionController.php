<?php

namespace HMD\Http\Controllers\Auth;

use HMD\Http\Controllers\Controller;
use HMD\Http\Requests\LoginRequest;
use Illuminate\Contracts\Auth\Guard;
use Laracasts\Flash\Flash;

class SessionController extends Controller
{
    /**
     * @var
     */
    protected  $auth;

    /**
     * @param Guard $auth
     */
    function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            Flash::message('You are now logged in');

            return redirect()->intended('/'.$this->auth->user()->id.'/orders');
        }

        Flash::error('Incorrect credentials');

        return redirect()->back();
    }

    public function getLogout()
    {
        $this->auth->logout();

        return redirect()->to('auth/log-in');
    }
}