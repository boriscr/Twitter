<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class TwitterPost extends Model
{
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
