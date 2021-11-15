<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pre_elections extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'pre_elections';
    protected $fillable = [
        'person_id', 'politics_parties_id', 'electoral_period',
    ];

}
