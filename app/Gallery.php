<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "images";

    public function kategori()
    {
    	return $this->belongsTo("App\Category", 'cat_id');
    }
}
