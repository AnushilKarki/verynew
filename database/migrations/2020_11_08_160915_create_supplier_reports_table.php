<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->nullable();
            $table->dateTime('from', 0);
            $table->dateTime('to', 0);
            $table->float('total_credit_amount',8,2);
            $table->integer('total_delivery_completed');
            $table->integer('total_delivery_failed');
            $table->integer('total_orders');
            $table->integer('total_returns');
            $table->enum('report_type',['yearly','monthly','weekly','daily']);
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
        Schema::dropIfExists('supplier_reports');
    }
}
