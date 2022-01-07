<?php

namespace App\Models\AccountSetup;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PermissionUser extends Pivot
{
    use HasFactory;
    protected $guarded = [];
}
