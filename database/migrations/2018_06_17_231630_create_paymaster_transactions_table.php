<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymasterTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('paymaster_transactions')) {
            Schema::create('paymaster_transactions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('user_id')->index()->default(0);
                $table->string('type')->nullable(false)->index();
                $table->string('lmi_merchant_id')->nullable(true)->index();
                $table->decimal('lmi_payment_amount', 10, 2)->nullable(true)->index();
                $table->string('lmi_currency', 10)->nullable(true)->index();
                $table->string('lmi_payment_no')->nullable(true)->index();
                $table->string('lmi_sys_payment_id')->nullable(true)->index();
                $table->string('lmi_sys_payment_date')->nullable(true)->index();
                $table->decimal('lmi_paid_amount', 10, 2)->nullable(true)->index();
                $table->string('lmi_paid_currency', 10)->nullable(true)->index();
                $table->string('lmi_payment_desc')->nullable(true);
                $table->tinyInteger('lmi_sim_mode')->nullable(true);
                $table->string('lmi_invoice_confirmation_url')->nullable(true)->index();
                $table->string('lmi_payment_notification_url')->nullable(true)->index();
                $table->string('lmi_success_url')->nullable(true)->index();
                $table->string('lmi_failure_url')->nullable(true)->index();
                $table->string('lmi_expires')->nullable(true);
                $table->string('lmi_payment_method')->nullable(true)->index();
                $table->string('lmi_hash')->nullable(true);
                $table->string('lmi_calculated_hash')->nullable(true);
                $table->string('hash_method', 15)->nullable(true);
                $table->string('sign')->nullable(true);
                $table->string('keypass', 100)->nullable(true);
                $table->string('lmi_payer_phone_number')->nullable(true)->index();
                $table->string('lmi_payer_email')->nullable(true)->index();
                $table->string('lmi_payer_identifier')->nullable(true)->index();
                $table->string('lmi_payer_country', 5)->nullable(true)->index();
                $table->string('lmi_payer_passport_country', 5)->nullable(true)->index();
                $table->string('lmi_payer_ip_address')->nullable(true)->index();
                $table->text('info')->nullable(true);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paymaster_transactions');
    }
}
