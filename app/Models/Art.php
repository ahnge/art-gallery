<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'artist_name', 'poster_id', 'image_url', 'movement', 'collector_id'];

    protected $table = 'arts';

    public function poster()
    {
        return $this->belongsTo(User::class, 'poster_id');
    }

    public function collector()
    {
        return $this->belongsTo(User::class, 'collector_id')->withDefault();
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
