<?php

namespace App\Models\AccountSetup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Permission extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany('App\User', 'permission_users');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_permissions');
    }
}
