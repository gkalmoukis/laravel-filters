<?php

namespace Happyonline\LaravelFilters;

use Illuminate\Support\ServiceProvider;
use Happyonline\LaravelFilters\Console\MakeFilterCommand;

class LaravelFiltersServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('filterBuilder', function($app) {
        return new FilterBuilder();
    });

    
  }

  public function boot()
  {
    if ($this->app->runningInConsole()) {
        $this->commands([
            MakeFilterCommand::class
        ]);
      }
  }
}