<?php

namespace Alexsaab\Paymaster\Models;

use Illuminate\Database\Eloquent\Model;


class PaymasterTransactionItem extends Model
{
    //Таблица стран доставки
    protected $table = 'paymaster_transaction_items';

    //Заполняемые поля
    protected $fillable = [
        'paymaster_transaction_id',
        'name',
        'qty',
        'price',
        'tax',
        'created_at',
        'updated_at'
    ];


    /**
     * Соотношение
     * @return mixed
     */
    public function transaction() {
        return $this->belongsTo(PaymasterTransaction::class, 'paymaster_transaction_id', 'id');
    }


}
