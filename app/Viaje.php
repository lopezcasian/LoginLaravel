<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
	protected $guarded = [];
    public function user(){
    	return $this->belongsTo(User::class); // Relacciona con User
    } 
}