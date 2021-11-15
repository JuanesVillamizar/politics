<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'ratings';
    protected $fillable = [
        'person_id', 'politics_parties_id', 'ratings',
    ];

}
