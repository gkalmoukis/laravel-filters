<?php
namespace Gkalmoukis\LaravelFilters\Traits;

use Gkalmoukis\LaravelFilters\FilterBuilder;

trait FilterByTrait {
    
    public function scopeFilterBy($query, $filters) {
        $path = explode('\\', get_class($this));
        $namespace = 'App\Filters\\'.array_pop($path);
        $filter = new FilterBuilder($query, $filters, $namespace);
        return $filter->apply();
    }

}