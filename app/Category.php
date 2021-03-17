<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded=[];

    public function subcats(){
        return $this->hasMany(Subcategories::class);
    }
    public function domains(){
        return $this->hasMany(Domain::class);
    }
}
