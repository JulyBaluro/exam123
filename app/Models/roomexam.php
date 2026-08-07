<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class roomexam extends Model
{
    protected $fillable = [
        'room_name',
        'room_number',
        'condition',
        'room_floor',
        'room_type',
    ];
}
