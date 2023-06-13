<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistance_need extends Model
{
    use HasFactory;

    public function disaster()
    {
        return $this->hasOne('App\Models\Disaster', 'id', 'disasterId');
    }
}
