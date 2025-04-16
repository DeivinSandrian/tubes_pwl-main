<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $table = 'program_studi';
    protected $primaryKey = 'id_prodi';

    protected $fillable = [
        'nama_prodi',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'program_studi_id_prodi', 'id_prodi');
    }
}
=======
    protected $table = 'program_studi';

    protected $primaryKey = 'id_prodi';

    protected $fillable = ['nama_prodi'];
}
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
