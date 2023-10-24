<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Store;
use App\Providers\RouteServiceProvider;
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


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // // Define the characters you want to include
        // $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // $randomCharacters = '';

        // // Generate a random string of characters
        // for ($i = 0; $i < 4; $i++) {
        //     $randomCharacters .= $characters[rand(0, strlen($characters) - 1)];
        // }

        // $randomNumber = mt_rand(1000000, 9999999);

        // $client_id = $randomNumber . $randomCharacters;



        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function addUser(){
        $stores= Store::all();
        return view('add_user',compact('stores'));
    }
    public function register(Request $request): RedirectResponse
    {



        $request->validate([
            'store_id'=>['required'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],

        ]);




        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'store_id'=>$request->store_id,
            'password' => Hash::make($request->password),
            'phone_number'=>$request->phone_number,
            'address'=>$request->address
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return redirect()->route('user.create')->with('success_message','User Created successfully');
    }

}
