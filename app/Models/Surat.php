<?php
<<<<<<< HEAD
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    public $timestamps = true;

    protected $fillable = [
        'jenis_surat',
        'status_pengajuan',
        'semester',
        'alamat_lengkap_bandung',
        'keperluan_pengajuan',
        'surat_ditujukan_kepada',
        'nama_mata_kuliah',
        'kode_mata_kuliah',
        'topik',
        'data_mahasiswa',
        'tanggal_kelulusan',
        'user_id_user',
        'program_studi_id_prodi',
        'file_path',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id_user', 'id_user');
    }

    public function programStudi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id_prodi', 'id_prodi');
    }

    public function pengajuans()
    {
        return $this->hasMany(Pengajuan::class, 'surat_id_surat', 'id_surat');
    }
}
=======

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
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
