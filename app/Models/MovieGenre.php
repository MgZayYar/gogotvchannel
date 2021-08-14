<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieGenre extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['movie_id', 'genre_id'];

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
}
