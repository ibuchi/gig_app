<?php

namespace App\Models;

use App\Events\GigCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gigs extends Model
{
    use HasFactory;

    protected $dispatchesEvents = [
        'created' => GigCreated::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $guarded = [];

}
