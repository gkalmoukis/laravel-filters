<?php
namespace Gkalmoukis\LaravelFilters;

interface FilterInterface
{
    public function handle($value): void;
    
}