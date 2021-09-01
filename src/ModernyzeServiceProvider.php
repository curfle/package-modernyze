<?php

namespace Modernyze;

use Curfle\Support\ServiceProvider;

class ModernyzeServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $this->app->singleton("Modernyze", function () {
            return new ModernyzeManager();
        });
    }
}