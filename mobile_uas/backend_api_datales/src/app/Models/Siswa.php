<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'user_id', 'name', 'email', 'phone', 'TTL',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
