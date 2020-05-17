<?php
namespace usama165\facebook\Facades;

use Illuminate\Support\Facades\Facade;

class Facebook extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'FBM';
    }
}