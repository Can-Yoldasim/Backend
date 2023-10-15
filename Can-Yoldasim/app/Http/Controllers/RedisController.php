<?php

namespace app\Http\Controllers;
use vendor\laravel\framework\src\Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function index()
    {
        if (Redis::ping()) {
            Redis::set("name:1", "kemo");
            ddd(Redis::get("name:1"));
        } else {
            ddd("Failed");
        }
    }

}
