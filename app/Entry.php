<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
    //relacion $entry->user, de vista welcome
    //Entry N - 1 User
    //Eager loading user
    public function user(){
        return $this->belongsTo(User::class);
    }
    //mutator doc laravel
    public function setTitleAttribute($value){
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
   
    

    public function getUrl(){
        // return url('entries/'.$this->slug.'-'.$this->id);
        return url("entries/$this->slug-$this->id");
    }
}
