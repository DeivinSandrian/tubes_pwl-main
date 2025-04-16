<?php
<<<<<<< HEAD
=======

>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The primary key associated with the table.
=======
    protected $table = 'user';
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The primary key for the model.
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
=======
     * @var list<string>
     */
    protected $fillable = [
        'id_user',
        'username',
        'password',
        'nama',
        'email',
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
        'role',
        'program_studi_id_prodi',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array<int, string>
=======
     * @var list<string>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'string',
    ];

    /**
     * Get the program studi associated with the user.
     */
    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id_prodi', 'id_prodi');
    }
}
=======
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Save a new student record.
     *
     * @param int $id_user
     * @param string $nama
     * @param int $program_studi_id_prodi
     * @return bool
     */
    public static function saveStudent($id_user, $nama, $program_studi_id_prodi)
    {
        try {
            // Create a new user record using Eloquent
            $user = self::create([
                'id_user' => $id_user,
                'nama' => $nama,
                'program_studi_id_prodi' => $program_studi_id_prodi,
                // Eloquent will automatically set created_at and updated_at
            ]);

            return true;
        } catch (\Exception $e) {
            // In a production environment, you might want to log this error instead of echoing it
            \Log::error("Error saving student: " . $e->getMessage());
            return false;
        }
    }
}
?>
>>>>>>> 1811f1896ddb1aab15e58016dfa8de2ab0b068bf
