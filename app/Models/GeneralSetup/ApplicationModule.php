<?php

namespace App\Models\GeneralSetup;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApplicationModule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function periods()
    {
        return $this->hasMany(Period::class);
    }

}
