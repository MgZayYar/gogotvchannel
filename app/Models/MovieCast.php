<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MovieCast extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['actor_id', 'movie_id', 'role'];

    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }

    public function actor()
    {
        return $this->belongsTo('App\Models\Actor');
    }
}
