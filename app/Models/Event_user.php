<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_user extends Model
{
    use HasFactory;

    protected $table = 'event_user';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'event_id',
        'user_id',
        'paid',
        'expiration',
        'payment_method',
        'comment',
    ];
}
