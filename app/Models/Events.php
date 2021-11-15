<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'events';
    protected $fillable = [
        'politics_id', 'politics_parties_id', 'name', 'place', 'country', 'city', 'image', 'date', 'time', 'description',
    ];

}
