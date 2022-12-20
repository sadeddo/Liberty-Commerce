<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'name',
        'image',
        'price',
        'quantity',
        //'Ingredients',
        //'Preparation',
        'stock',
        'description',
    ];

public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
/*public function produits()
    {
        return $this->belongsToMany(Produit::class, 'user_has_produit');
    }*/
}