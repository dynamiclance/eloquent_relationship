<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //fiilable

    protected $fillable = [
        'title',
    ];


    public function comments() {
        return $this->hasMany(Comment::class);
    }


    public function categories() { 
        return $this->belongsToMany(Category::class);
    }


    // public function categories() {
    //     return $this->belongsToMany(Category::class);
    // }


}