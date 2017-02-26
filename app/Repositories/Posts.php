<?php
/**
 * Created by PhpStorm.
 * User: Anuj
 * Date: 26-02-2017
 * Time: 11:46
 */
namespace App\Repositories;

use App\Post;
use App\Redis;

class Posts
{
    protected $redis;
    public function __construct(Redis $redis)
    {
        $this->redis = $redis;
    }

    public function all()
    {
        return Post::all();
    }

 }