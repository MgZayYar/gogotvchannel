<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['codeno','title','photo', 'year', 'length', 'language', 'release_date', 'release_country', 'description','link1','link2','link3'];

    public function movie_directions()
    {
        return $this->hasMany('App\Models\MovieDirection');
    }

    public function movie_casts()
    {
        return $this->hasMany('App\Models\MovieCast');
    }

    public function movie_genres()
    {
        return $this->hasMany('App\Models\MovieGenre');
    }
}
