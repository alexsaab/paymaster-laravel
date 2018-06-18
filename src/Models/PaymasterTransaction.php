<?php

namespace Alexsaab\Paymaster\Models;

use Illuminate\Database\Eloquent\Model;


class PaymasterTransaction extends Model
{
    //Таблица стран доставки
    protected $table = 'paymaster_transactions';

    //Заполняемые поля
    protected $fillable = [
        'user_id',
        'type',
        'lmi_merchant_id',
        'lmi_payment_amount',
        'lmi_currency',
        'lmi_payment_no',
        'lmi_sys_payment_id',
        'lmi_sys_payment_date',
        'lmi_paid_amount',
        'lmi_paid_currency',
        'lmi_payment_desc',
        'lmi_sim_mode',
        'lmi_invoice_confirmation_url',
        'lmi_payment_notification_url',
        'lmi_success_url',
        'lmi_failure_url',
        'lmi_expires',
        'lmi_payment_method',
        'lmi_hash',
        'lmi_calculated_hash',
        'hash_method',
        'sign',
        'keypass',
        'lmi_payer_phone_number',
        'lmi_payer_email',
        'lmi_payer_identifier',
        'lmi_payer_country',
        'lmi_payer_passport_country',
        'lmi_payer_ip_address',
        'info',
        'created_at',
        'updated_at'
    ];


    /**
     * Соотношение
     * @return mixed
     */
    public function items() {
        return $this->hasMany(PaymasterTransactionItem::class);
    }
}
