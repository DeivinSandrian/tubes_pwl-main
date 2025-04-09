<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'surat';

    protected $primaryKey = 'id_surat';

    protected $fillable = ['jenis_surat',
        'status_pengajuan',
        'tanggal_pengajuan',
        'tanggal_persetujuan',
        'user_id',
    ];

    protected $casts = [
        'jenis_surat' => 'string',
        'status_pengajuan' => 'string',
        'tanggal_pengajuan' => 'date',
        'tanggal_persetujuan' => 'date',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
        
}
