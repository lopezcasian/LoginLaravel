<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Viaje;
use App\User;
use App\Http\Requests\CreateViajesRequest;
use Illuminate\Http\Request;

class ViajesController extends Controller
{
    public function show($username){

    	$user = User::where('username', $username)->first(); // Query para tomar el primer registro de User donde 
    														 // username es igual al parámetro dado

    	return view('viajes',[
    		'usuario' => $user,
    	]);
    }

    public function create(CreateViajesRequest $request, $user_id){
        $user = User::where('id', $user_id)->first();

    	$viaje = Viaje::create([
            'pais' => $request->input('pais'),          
            'estado' => $request->input('estado'),
            'ciudad' => $request->input('ciudad'),
            'dias' => $request->input('dias'),
            'noches' => $request->input('noches'),
            'user_id' => $user_id,
        ]);
        return redirect('/index/'.$user->username);
    }

}
