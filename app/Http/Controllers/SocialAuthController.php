<?php

namespace App\Http\Controllers;

use App\User;
use App\SocialProfile;
use Illuminate\Http\Request;
use Socialite;

class SocialAuthController extends Controller
{
    public function facebook(){
    	return Socialite::driver('facebook')->redirect();                           // Redirecciona a la aplicación de fb
    }

    public function callback(){
    	$user = Socialite::driver('facebook')->user();                              // Datos del usuario de fb

    	$existing = User::whereHas('social_Profiles', function($query) use ($user){ // Query para saber si existe un
    		$query->where('social_id', $user->id);                                  // registro igual a $user
    	})->first();

    	if($existing !== null) {                                                    // Si si existe, lo "logea".
    		auth()->login($existing);
    		return redirect('/index/'.$existing->username);
    	}

    	session()->flash('facebookUser', $user);                                   // Se guardan los datos y posterior-
    	return view('facebook', [                                                  // mente se llama a la view para
    		'user' => $user,                                                       // ingresar el username

    	]);
    }

    public function register(Request $request){
    	$data = session('facebookUser');
    	$username = $request->input('username');

    	$user = User::create([                             // Creando un registro en la tabla usuarios con los datos de
    		'name' => $data->name,                         // fb.
    		'email' => $data->email,
    		'image' => $data->avatar,
    		'username' => $username,
    		'password' => str_random(16),
    	]);

    	$profile = SocialProfile::create([                 // Creando registro del usuario de fb
    		'social_id' => $data->id,
    		'user_id' => $user ->id,
    	]);

    	auth()->login($user);                              // "Loguear"

    	return redirect('/index/'.$user->username);        // Redireccionar
    }
}
