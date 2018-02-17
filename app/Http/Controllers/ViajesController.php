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


    public function create(Request $request){

    	$this->validate($request, [
    		'pais' => ['required','max:50'],
    		'estado' => ['required','max:50'],
    		'ciudad' => ['nullable','max:50'],
    		'dias' => ['required','numeric','max:2'],
    		'noches' => ['required','numeric','max:2'],
    	]);
    	return 'llego!';
    }

}
