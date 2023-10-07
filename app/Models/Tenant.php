<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'phonenumber',
        'email',
        'roomid',
        'rentdue',
        'rentpaid',
        'balance',
        'datemovedin',
        'datemovedout',
    ];
}
