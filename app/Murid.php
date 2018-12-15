<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
	protected $table = "murid";

    public function kelas()
    {
    	return $this->belongsTo("App\Kelas");
    }
}
