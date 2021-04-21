<?php

namespace Gkalmoukis\LaravelFilters;

use Illuminate\Support\ServiceProvider;
use Gkalmoukis\LaravelFilters\Console\MakeFilterCommand;

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