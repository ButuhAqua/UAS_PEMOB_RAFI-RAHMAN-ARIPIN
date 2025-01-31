<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $fillable = [
        'materi', 'waktu', 'pengajar_id',
    ];

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }
}
