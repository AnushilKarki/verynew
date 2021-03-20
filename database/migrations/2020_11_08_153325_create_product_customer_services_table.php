<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCustomerServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_customer_services', function (Blueprint $table) {
            $table->id();
            $table->text('customer_query');
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->nullable();
            $table->text('answer')->nullable();
            $table->foreignId('customer_id')->references('id')->on('users')->onDelete('cascade')->nullable();
            $table->foreignId('employee_user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('product_customer_services');
    }
}
