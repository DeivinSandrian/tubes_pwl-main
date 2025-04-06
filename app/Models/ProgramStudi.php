<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $table = 'program_studi';

    protected $primaryKey = 'id_prodi';

    protected $fillable = ['nama_prodi'];
}
