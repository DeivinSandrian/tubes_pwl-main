<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $table = 'user';
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'id_user',
        'username',
        'password',
        'nama',
        'email',
        'role',
        'program_studi_id_prodi',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
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