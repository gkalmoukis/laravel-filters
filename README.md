# laravel-filters

## Install

Via composer 

```
composer require gkalmoukis/laravel-filters
```

## Usage

### Create filter class

```
php artisan make:filter <filter-name> --model=<model>
```

Write your query in `handle()` method in  `app\Filters\<model>\<filter-name>`

> <filter-name> must exists as column in the model database table.
 
### Add the trait

In your model import the `FilterByTrait` in scope.

```
use Gkalmoukis\LaravelFilters\Traits\FilterByTrait;
```

and use it

```
use FilterByTrait;
```

### Filter results

```
$filters = request()->all();
$results = Model::filterBy($filters)->get();
```
