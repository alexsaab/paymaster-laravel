<?php
declare(strict_types=1);

class PaymasterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/paymaster.php' => config_path('paymaster.php'),
        ]);
    }
}
