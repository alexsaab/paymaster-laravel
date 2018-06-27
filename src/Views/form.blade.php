<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Paymaster оплата</title>
</head>
<body>
<form method="post" action="{{ $method->url }}" name="paymentForm">
    <input type="hidden" name="LMI_MERCHANT_ID" value="{{ $method->LMI_MERCHANT_ID }}"/>
    <input type="hidden" name="LMI_PAYMENT_AMOUNT" value="{{ $method->LMI_PAYMENT_AMOUNT }}"/>
    <input type="hidden" name="LMI_CURRENCY" value="{{ $method->LMI_CURRENCY }}"/>
    <input type="hidden" name="LMI_PAYMENT_DESC" value="{{ $method->LMI_PAYMENT_DESC }}"/>
    @if (isset($method->LMI_PAYMENT_NO))
        <input type="hidden" name="LMI_PAYMENT_NO" value="{{ $method->LMI_PAYMENT_NO }}"/>
    @endif
    @if (isset($method->LMI_SIM_MODE))
        <input type="hidden" name="LMI_SIM_MODE" value="{{ $method->LMI_SIM_MODE }}"/>
    @endif
    @if (isset($method->LMI_INVOICE_CONFIRMATION_URL))
        <input type="hidden" name="LMI_INVOICE_CONFIRMATION_URL" value="{{ $method->LMI_INVOICE_CONFIRMATION_URL }}"/>
    @endif
    @if (isset($method->LMI_PAYMENT_NOTIFICATION_URL))
        <input type="hidden" name="LMI_PAYMENT_NOTIFICATION_URL" value="{{ $method->LMI_PAYMENT_NOTIFICATION_URL }}"/>
    @endif
    @if (isset($method->LMI_SUCCESS_URL))
        <input type="hidden" name="LMI_SUCCESS_URL" value="{{ $method->LMI_SUCCESS_URL }}"/>
    @endif
    @if (isset($method->LMI_FAILURE_URL))
        <input type="hidden" name="LMI_FAILURE_URL" value="{{ $method->LMI_FAILURE_URL }}"/>
    @endif
    @if (isset($method->LMI_PAYER_PHONE_NUMBER))
        <input type="hidden" name="LMI_PAYER_PHONE_NUMBER" value="{{ $method->LMI_PAYER_PHONE_NUMBER }}"/>
    @endif
    @if (isset($method->LMI_PAYER_EMAIL))
        <input type="hidden" name="LMI_PAYER_EMAIL" value="{{ $method->LMI_PAYER_EMAIL }}"/>
    @endif
    @if (isset($method->LMI_EXPIRES))
        <input type="hidden" name="LMI_EXPIRES" value="{{ $method->LMI_EXPIRES }}"/>
    @endif
    @if (isset($method->LMI_PAYMENT_METHOD))
        <input type="hidden" name="LMI_PAYMENT_METHOD" value="{{ $method->LMI_PAYMENT_METHOD }}"/>
    @endif
    @if (isset($method->LMI_SHOP_ID))
        <input type="hidden" name="LMI_SHOP_ID" value="{{ $method->LMI_SHOP_ID }}"/>
    @endif
    @if (isset($method->SIGN))
        <input type="hidden" name="SIGN" value="{{ $method->SIGN }}"/>
    @endif
    @if (count($this->LMI_SHOPPINGCART) > 0)
        @foreach ($this->LMI_SHOPPINGCART as $key=>$ITEM)
            <input type="hidden" name="LMI_SHOPPINGCART.ITEM[{{ $key }}].NAME" value="{{ $ITEM["NAME"] }}"/>
            <input type="hidden" name="LMI_SHOPPINGCART.ITEM[{{ $key }}}].QTY" value="{{ $ITEM["QTY"] }}"/>
            <input type="hidden" name="LMI_SHOPPINGCART.ITEM[{{ $key }}].PRICE"
                   value="{{ number_format($ITEM["PRICE"],2) }}"/>
            <input type="hidden" name="LMI_SHOPPINGCART.ITEM[{{ $key }}].TAX" value="{{ $ITEM["TAX"] }}"/>
        @endforeach
    @endif
    <input type="submit" value="Оплатить"/>
</form>
<script>
    window.onload = function(){
        document.forms['paymentForm'].submit();
    }
</script>
</body>
</html>