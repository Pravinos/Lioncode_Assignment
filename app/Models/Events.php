<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    protected $table = 'events';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'priority',
        'status',
        'published',
        'release_date_files',
        'expiration',
        'title',
        'htmlTitle',
        'subtitle',
        'header',
        'summary',
        'body',
        'hours',
        'absences_limit',
        'enroll',
        'index',
        'feed',
        'certificate_title',
        'fb_group',
        'evaluate_topics',
        'evaluate_instructors',
        'fb_testimonial',
        'author_id',
        'creator_id',
        'view_tpl',
        'view_counter',
        'published_at',
        'created_at',
        'updated_at',
        'launch_date',
        'xml_title',
        'xml_description',
        'xml_short_description',
    ];

        public function users()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }

        public function topics()
    {
        return $this->belongsToMany(Topic::class, 'event_topic_lesson_instructor', 'event_id', 'topic_id')
                    ->with('lessons', 'instructors');
    }

}
