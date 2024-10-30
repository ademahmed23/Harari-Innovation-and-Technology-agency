<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'off_day',
        'support_title',
        'time',
        'phone_one',
        'phone_two',
        'mail_one',
        'mail_two',
        'address',
        'map_link',
        'language'
    ];
}
