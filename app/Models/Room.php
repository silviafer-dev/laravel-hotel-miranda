<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

       protected $fillable = [
        'room_number',
        'room_type',
        'description',
    ];
    protected $primaryKey = "room_id";
}
