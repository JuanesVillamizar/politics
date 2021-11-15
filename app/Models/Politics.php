<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politics extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'politics';
    protected $fillable = [
        'user_id', 'politics_parties_id', 'name', 'last_name', 'image', 'country', 'city', 'personal_information', 'political_career', 'political_achievements', 'goals',
    ];

}
