<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    public function kepala()
    {
        return $this->belongsTo(Kepala::class);
    }

    public function murids()
    {
        return $this->belongsToMany(Murid::class)
            ->withPivot(['sekolah_id', 'murid_id', 'tahun', 'pilihan', 'status'])
            ->orderBy('pivot_pilihan')
            ->withTimestamps();;
    }
}
