<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $fillable = [
        'Write',
        'Read',
        'Edit',
        'Delete',
        'Add',
        'Buy',
    ];
    public function groupes()
    {
        return $this->hasMany(Groupe::class);
    }
    public function bills()
    {
        return $this->hasMany(Bill::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
