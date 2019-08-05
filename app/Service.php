<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function users()
    {
        return $this->belongsToMany('App\User','service_user','service_id','user_id');
    }
}
