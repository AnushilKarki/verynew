<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_foods', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_address');
            $table->string('delivery_address');
            $table->string('pickup_contact_no');
            $table->string('delivery_contact_no');
            $table->foreignId('delivery_package_id')->references('id')->on('delivery_packages')->onDelete('cascade')->nullable();       
            $table->string('particular')->nullable();
            $table->string('ready_time');
            $table->float('total_amount_collection',8,2)->nullable();
            $table->float('weight')->nullable();
            $table->float('km')->nullable();
            $table->float('delivery_time')->nullable();
            $table->float('discount',8,2)->nullable();
            $table->float('delivery_charge',8,2)->nullable();
            $table->string('coupon')->nullable();
            $table->enum('status',['pending','packaging_completed','ready_to_deliver','delivery_completed'])->default('pending');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade')->nullable();
            $table->foreignId('order_id')->references('id')->on('orders')->onDelete('cascade')->nullable();
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->nullable();
            $table->enum('delivery_type',['customer','supplier','user','return'])->nullable();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->boolean('is_paid')->default(false);
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
        Schema::dropIfExists('delivery_foods');
    }
}
