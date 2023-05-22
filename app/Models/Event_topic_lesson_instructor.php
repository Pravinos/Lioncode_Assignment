<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event_topic_lesson_instructor extends Model
{
    use HasFactory;

    protected $table = 'event_topic_lesson_instructor';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'event_id',
        'topic_id',
        'lesson_id',
        'instructor_id',
        'date',
        'time_starts',
        'time_ends',
        'duration',
        'room',
        'location_url',
        'priority',
        'automate_mail',
        'send_automate_mail',
    ];
}
