<?php

namespace App\Http\Controllers\Socialite;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function login()
    {
        return Socialite::driver('github')
            ->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('github')->user();

        dump($user);
    }
}
