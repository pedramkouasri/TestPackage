<?php

namespace PedApp\Test;


use Illuminate\Support\Facades\Facade;

class PedAppFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pedapp';
    }

}