<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Demande extends Model
{
    protected $guarded = [];
    public function users(){
        return $this->belongsToMany(User::class, 'demande_user', 'demande_id', 'user_id');
    }
}
