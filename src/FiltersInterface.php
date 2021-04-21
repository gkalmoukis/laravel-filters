<?php
namespace Happyonline\LaravelFilters;

interface FilterInterface
{
    public function handle($value): void;
}