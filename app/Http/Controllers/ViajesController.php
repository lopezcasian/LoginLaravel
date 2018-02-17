<?php

namespace App\Http\Controllers;

use App\Viaje;
use App\User;
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
}
