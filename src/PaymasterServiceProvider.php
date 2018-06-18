<?php

namespace Alexsaab\Paymaster;

use Illuminate\Support\ServiceProvider;


class PaymasterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Публикуем конфиг
        $this->publishes([
            __DIR__ . '/../config/paymaster.php' => config_path('paymaster.php'),
        ], 'config');

        // Теперь все делаем таблица под транзакции
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'migrations');


        // Загружаем пути
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Загружаем виды
        $this->loadViewsFrom(__DIR__.'/Views', 'paymaster');


    }
}
