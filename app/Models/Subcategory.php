<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //REALACION DE UNO A MUCHOS
    public function products(){
        return $this->hasMany(Product::class);
    }

    //RELACION UNO A MUCHOS INVERSA
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
