<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'comments';
    protected $fillable = [
        'person_id', 'politics_id', 'comment', 'date_hours'
    ];

}
