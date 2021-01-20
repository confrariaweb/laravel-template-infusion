<?php

namespace ConfrariaWeb\TemplateInfusion\Providers;

use Illuminate\Support\ServiceProvider;

class TemplateInfusionServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'templateInfusion');
        $this->publishes([__DIR__ . '/../../config/cw_template_infusion.php' => config_path('cw_template_infusion.php')], 'config');
        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/confrariaweb/template-infusion'),
        ], 'public');
    }

    public function register()
    {
        //
    }
}
