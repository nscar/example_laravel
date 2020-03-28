<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //relacion $entry->user, de vista welcome
    //Entry N - 1 User
    //Eager loading user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
