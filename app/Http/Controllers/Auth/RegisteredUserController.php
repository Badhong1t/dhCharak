<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\BusinessUser;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        /* $userId = Auth::user()->id;
        $businessUser = BusinessUser::find($userId); */

        /* if($businessUser) {
            $request->validate([
                'business_name' => ['string', 'required', 'max:255'],
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'terms' => ['accepted'],
                'accountType' => ['required'],
                'trade_license' => ['required', 'image', 'max:2048'],
            ]);
        } */

        $request->validate([
            'business_name' => ['string', 'required', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
            'accountType' => ['required'],
            'trade_license' => ['required', 'image', 'max:2048'],
        ]);

        if ($request->hasFile('trade_license') && $request->file('trade_license')->isValid()) {
            $trade_license = Helper::fileUpload($request->file('trade_license'), 'user/trade_license', getFileName($request->file('trade_license')));
        } else {
            $trade_license = null;
        }
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'account_type' => $request->accountType,
            'island' => $request->island,
            'address' => $request->address,
        ]);

        $businessUser = BusinessUser::create([
            'user_id' => $user->id,
            'business_name' => $request->business_name,
            'trade_license' => $trade_license
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home', absolute: false));
    }
}
