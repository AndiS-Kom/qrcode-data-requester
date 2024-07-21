<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Md5hash extends Model
{
    use HasFactory;

    protected $fillable = [
        'md5hash',
        'taken',
    ];

    // If you want to disable timestamps (created_at and updated_at)
    public $timestamps = true;
}