<?php


namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';
    protected $fillable = [
        'id',
        'name',
        'sex',
        'age',
        'address',
        'phone',
        'height'
    ];

}
