<?php

namespace App;


class Task extends MyModel
{
//    public static function incomplete(){
//        return static::where('completed', 0)->get();
//    }
    public function scopeIncomplete($query){
        return $query->where('completed',0)->get();
    }

}
