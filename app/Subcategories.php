<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    protected $guarded=[];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function domains(){
        return $this->hasMany(Domain::class);
    }
}
