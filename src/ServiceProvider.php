<?php

    namespace man30\weather;
    class ServiceProvider extends \Illuminate\Support\ServiceProvider
    {
        protected $defer = TRUE;

        public function register()
        {
            $this->app->singleton(Weather::class, function () {
                return new Weather(config('services.weather.key'));
            });
            $this->app->alias(Weather::class, 'weather');
        }

        public function provides()
        {
            return [Weather::class, 'weather'];
        }
    }