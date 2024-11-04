<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('frontend.layouts.profile.index');
    }

    public function logout()
    {
        Auth::logout();
        flash()->success('Logout Successfully');
        return redirect()->route('home');
    }
}
