<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $guarded = [];
    protected $table = 'people';
    protected $fillable = [
        'user_id', 'cc', 'tag_name', 'name', 'country', 'city', 'last_name', 'phone', 'img',
    ];

    public static function getAllPersons(){
        return self::all();
    }

    public static function getPersonFromId(int $id){
        return self::where('id', $id)->first()->get();
    }

}
