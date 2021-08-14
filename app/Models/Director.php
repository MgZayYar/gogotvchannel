<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = ['name','gender'];

    public function movie_directions()
    {
        return $this->hasMany('App\Models\MovieDirection');
    }
}
