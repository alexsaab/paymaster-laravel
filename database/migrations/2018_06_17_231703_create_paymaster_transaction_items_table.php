<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymasterTransactionItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('paymaster_transaction_items')) {
            Schema::create('paymaster_transaction_items', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('paymaster_transaction_id')->nullable(false)->unsigned()->index();
                $table->string('name')->nullable(true)->index();
                $table->decimal('qty')->nullable(true);
                $table->decimal('price', 10, 2)->nullable(true);
                $table->string('tax', 15)->nullable(true);
                $table->timestamps();
            });

            Schema::table('paymaster_transaction_items', function ($table) {
                $table->foreign('paymaster_transaction_id')
                    ->references('id')->on('paymaster_transactions')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('paymaster_transaction_items');
    }
}
