<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_order_id')->references('id')->on('supplier_orders')->onDelete('cascade')->nullable();
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->nullable();
            $table->foreignId('delivery_id')->references('id')->on('delivery_parcels')->onDelete('cascade')->nullable();
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade')->nullable();
            $table->foreignId('shop_credit_id')->references('id')->on('shop_credits')->onDelete('cascade')->nullable();
            $table->string('particular');
            $table->float('total_amount',8,2);
            $table->float('paid',8,2);
            $table->float('remaining',8,2);
            $table->float('tax')->nulalble();
            $table->float('vat')->nullable();
            $table->enum('payment_method',['cash_on_delivery','card','mobile_wallet'])->default('cash_on_delivery');
            $table->enum('status',['completed','remaining','pending'])->default('pending');
            $table->text('note')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplier_payments');
    }
}
