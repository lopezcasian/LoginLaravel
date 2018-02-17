<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    protected $guarded = [];

    public function users(){
    	return $this->belongsTo(User::class); // Relacciona con User
    }
}
