<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'movie_id', 'series_season_episode_id'];


    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function seriesSeasonEpisode()
    {
        return $this->belongsTo(SeriesSeasonEpisode::class);
    }
}
