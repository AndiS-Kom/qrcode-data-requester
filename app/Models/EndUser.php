<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EndUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'md5hash',
        'name',
        'phone',
        'address',
        'city',
        'postal_code',
        'country',
    ];

    // If you want to disable timestamps (created_at and updated_at)
    public $timestamps = true;

    // Define the relationship with Md5hash
    public function md5hash()
    {
        return $this->belongsTo(Md5hash::class, 'md5hash', 'md5hash');
    }
}