<?php namespace repository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        //long form - for constructor DI
        $this->app->bind('repositories\\formInterface', 'repository\\formInput');
        //shortcut form
        $this->app->bind('formInput', 'repositories\\formInput');
    }
}
