<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Service extends Model
{
    public function users(){
        return $this->belongsToMany(User::class, 'service_user', 'service_id', 'user_id');
    }
}
