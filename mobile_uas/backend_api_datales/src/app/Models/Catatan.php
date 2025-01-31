<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    protected $fillable = [
        'tanggal', 'pengajar_id', 'siswa_id', 'catatan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }
}
