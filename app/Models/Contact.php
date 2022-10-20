<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'phone_number',
        'email',
        'title',
        'comment'
    ];

    public $timestamps = false;
}
