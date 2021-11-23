<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();  // TODO: Change the autogenerated stub

        static::creating(function ($model) {
            $murid = Murid::orderByDesc('id')->first();
            if (isset($murid)) {
                $nomor_urut = $murid->id + 1;
            } else {
                $nomor_urut = 1;
            }
            $tahun = Date('Y');
            $model->nomor_pendaftaran = $tahun . str_pad($nomor_urut, 4, '0', STR_PAD_LEFT);
        });
    }

    protected $fillable = ['sekolah_id'];

    public function sekolahs()
    {
        return $this->belongsToMany(Sekolah::class)
            ->withPivot(['sekolah_id', 'murid_id', 'tahun', 'pilihan'])
            ->orderBy('pivot_pilihan')
            ->withTimestamps();
    }

    public function agamas()
    {
        return $this->belongsTo(Agama::class, 'agama_id');
    }

    public function kelurahans()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
