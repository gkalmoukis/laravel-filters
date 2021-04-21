<?php

namespace Happyonline\LaravelFilters\Facedes;

use Illuminate\Support\Facades\Facade;

class FilterBuilder extends Facade
{
    protected static function getFacadeAccessor(){
        return 'filterBuilder';
    }
}