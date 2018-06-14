<?php
declare(strict_types=1);

if ((config('paymaster.LMI_MERCAHNT_ID')) && config('paymaster.LMI_PAYMENT_FORM_URL','/cart/checkout/payment/paymaster')) {
    Route::get(config('paymaster.LMI_PAYMENT_FORM_URL','/cart/checkout/payment/paymaster'), array(
        'as' => 'payment.paymaster.form',
        'uses' => 'Alexsaab\Paymaster\CommonController@form'
    ));
}

if (config('paymaster.LMI_PAYMENT_NOTIFICATION_URL')) {
    Route::get('/api/payment/paymaster/notification', array(
        'as' => 'payment.paymaster.notification',
        'uses' => 'Alexsaab\Paymaster\CommonController@notification'
    ));
}

if (config('paymaster.LMI_PAYMENT_CONFIRMATION_URL')) {
    Route::get('/api/payment/paymaster/confirmation', array(
        'as' => 'payment.paymaster.confirmation',
        'uses' => 'Alexsaab\Paymaster\CommonController@confirmation'
    ));
}

if (config('paymaster.LMI_PAYMENT_SUCCESS_URL')) {
    Route::get('/api/payment/paymaster/success', array(
        'as' => 'payment.paymaster.success',
        'uses' => 'Alexsaab\Paymaster\CommonController@success'
    ));
}

if (config('paymaster.LMI_FAILURE_URL')) {
    Route::get('/api/payment/paymaster/failure', array(
        'as' => 'payment.paymaster.failure',
        'uses' => 'Alexsaab\Paymaster\CommonController@failure'
    ));
}