<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    Public function user(){
        Return $this->belongsTo(User::class,'user_id');
        }

    protected $fillable = [
        'cart',
        'user_id',
        'prixTotal',
        //'reference',
    ];
   
}