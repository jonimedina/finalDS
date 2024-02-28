<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use App\Models\Docente;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'rol',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function docente(){
        return $this->hasOne(Docente::class,'email','email');
    }

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user) {
            $user->crearDocente();
        });
    }

    public function crearDocente()
    {
        $docenteExistente = Docente::where('email', ['email'])->first();
        if (!$docenteExistente) {
        $this->docente()->create([
            'nombre' => $this->name,
            'email' => $this->email,
            'apellido'=> '',
            'telefono'=>'',
            'rol'=>'Docente',
            'materia1'=>'',
            'aniomateria1'=>'',
            'materia2'=>'',
            'aniomateria2'=>'',]);
        } 
        
    }
}
