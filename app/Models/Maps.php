<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->hasMany('App\Models\MapEvent', 'map_id', 'id');
    }

    public function shelters()
    {
        return $this->hasMany('App\Models\MapShelter', 'map_id', 'id');
    }
}
