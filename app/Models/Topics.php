<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    use HasFactory;

    protected $table = 'topics';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'priority',
        'status',
        'comment_status',
        'title',
        'short_title',
        'subtitle',
        'header',
        'summary',
        'body',
        'author_id',
        'creator_id',
        'email_template',
        'created_at',
        'updated_at',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'event_topic_lesson_instructor', 'topic_id', 'lesson_id');
    }

    public function instructors()
    {
        return $this->belongsToMany(Instructor::class, 'event_topic_lesson_instructor', 'topic_id', 'instructor_id');
    }

}
