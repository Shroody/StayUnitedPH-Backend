<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    use HasFactory;
    public function barangay()
    {
        return $this->hasOne('App\Models\Maps', 'id', 'barangayId');
    }

    public function event()
    {
        return $this->hasOne('App\Models\MapEvent', 'id', 'eventId');
    }




}
