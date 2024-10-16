<?php

namespace RadPack\StatamicWpImport;

use Statamic\Facades\CP\Nav;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $scripts = [__DIR__.'/../dist/js/addon.js'];

    protected $routes = [
        'cp' => __DIR__.'/../routes/cp.php',
    ];

    public function boot()
    {
        parent::boot();

        Nav::extend(function ($nav) {
            $nav->tools('WP Import')
                ->route('wp-import.index')
                ->icon('crane');
        });
    }
}
