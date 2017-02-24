<?php
/**
 * Created by PhpStorm.
 * User: Anuj
 * Date: 24-02-2017
 * Time: 14:33
 */

namespace App;
use Illuminate\Database\Eloquent\Model as  Eloquent;

class MyModel extends Eloquent
{
    //Eloquent::unguard();
    //protected $guarded = ['user_id'];
    //protected $fillable = ['title','body','user_id'];
    protected $guarded = [];
}