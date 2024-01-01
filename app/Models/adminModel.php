<?php
// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class adminModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = ['username', 'password', 'leveluser'];

    // ... (lainnya sesuai kebutuhan)

    // Buat method untuk mencari user berdasarkan username
    public static function findByUsername($username)
    {
        return static::where('username', $username)->first();
    }
}
