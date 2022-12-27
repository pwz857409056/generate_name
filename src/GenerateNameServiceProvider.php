<?php


namespace Pwz\GenerateName;


use Illuminate\Support\ServiceProvider;

class GenerateNameServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('generate_name', function () {
            return new GenerateName();
        });
    }
}
