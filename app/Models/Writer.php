<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
    protected $fillable = ['name', 'position', 'photo_path', 'bio'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
