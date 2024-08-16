<?php

namespace Ozodbek\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // This method is called after all other services have been registered.
        // You can use it to boot any additional services or configurations.
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        // This method is used to bind classes or services into the Laravel container.
        // You can register any custom classes or dependencies here.
    }
}
