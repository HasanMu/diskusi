<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	protected $table = "kelas";
	
    public function murid()
    {
    	return $this->hasMany("App\Murid");
    }
}
