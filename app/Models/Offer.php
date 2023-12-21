<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Pivot
{
    use HasFactory;

    protected $fillable = ['user_id', 'art_id', 'amount'];

    protected $table = 'offers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function art()
    {
        return $this->belongsTo(Art::class)->withDefault();
    }
}
