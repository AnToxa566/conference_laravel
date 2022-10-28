<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date_time_event',
        'latitude',
        'longitude',
        'country',
    ];

    public function users() {
        return $this->belongsToMany(User::class);
    }
}