<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //RELACION UNO A MUCHOS
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //RELACION DE UNO A MUCHOS INVERSA
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //RELACION DE UNO A MUCHOS INVERSA
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //RELACION MUCHOS A MUCHOS
    public function colors(){
        return $this->hasMany(Color::class);
    }

    //RELACION UNO A MUCHOS POLIMORFICA
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
