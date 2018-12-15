<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category_image";

    public function gallery()
    {
    	return $this->hasMany("App\Gallery", 'cat_id');
    }
}
