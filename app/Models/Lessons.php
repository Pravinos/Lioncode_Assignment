<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'status',
        'title',
        'htmlTitle',
        'subtitle',
        'header',
        'summary',
        'body',
        'vimeo_video',
        'vimeo_duration',
        'links',
        'bold',
        'author_id',
        'creator_id',
        'published_at',
        'created_at',
        'updated_at',
    ];
}
