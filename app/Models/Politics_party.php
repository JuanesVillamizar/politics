<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Politics_party extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'politics_parties';
    protected $fillable = [
        'user_id', 'name', 'logo', 'message', 'description', 'subscription',
    ];

    public static function getAllPartyPolitics(){
        return self::all();
    }

    public static function getPartyPoliticsFromId(int $id){
        return self::where('id', $id)->first()->get();
    }

}
