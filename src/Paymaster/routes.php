<?php
declare(strict_types=1);


Route::get('/cart/checkout/payment/paymaster', array(
    'as' => 'checkout.payment.paymaster',
    'uses' => 'Alexsaab\Paymaster\CommonController@form'
));

Route::get('/api/payment/paymaster/notification', array(
    'as' => 'payment.paymaster.notification',
    'uses' => 'Alexsaab\Paymaster\CommonController@notification'
));
