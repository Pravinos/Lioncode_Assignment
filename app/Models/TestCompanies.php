<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TestCompanies extends Model
{
    protected $table = 'test_companies';

    protected $fillable = [
        'name',
        'address',
        'phone',
    ];
}
