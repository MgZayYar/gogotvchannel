<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieDirection extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['director_id', 'movie_id'];

    public function director()
    {
    	return $this->belongsTo('App\Models\Director');
    }

    public function movie()
    {
    	return $this->belongsTo('App\Models\Movie');
    }
}
