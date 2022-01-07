<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
    ];


    public function loginoutLogs()
    {
        return $this->hasMany(LoginoutLog::class);
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\AccountSetup\Role', 'role_users');
    }

    public function cachedRoles()
    {
        $key = 'roles_' . $this->id;
        return cache()->rememberForever($key, function () {
            return $this->roles;
        });
    }

    public function permissions()
    {
        return $this->belongsToMany('App\Models\AccountSetup\Permission', 'permission_users');
    }

    public function cachedPermissions()
    {
        $key = 'permissions_' . $this->id;
        return cache()->rememberForever($key, function () {
            return $this->permissions;
        });

    }

    public function isSuperAdmin()
    {
        return ($this->cachedRoles()->first()->id??0) === 1;
    }
    public function isAdmin()
    {
        return ($this->cachedRoles()->first()->id??0) === 2;
    }


}
