<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashFlowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade')->nullable();
            $table->dateTime('from');
            $table->dateTime('to');
            $table->float('net_cash_flow_operation');
            $table->float('net_cash_flow_investment');
            $table->float('net_cash_flow_finance');
            $table->float('net_cash_flow_increase');
            $table->float('net_cash_beginning');
            $table->float('net_cash_end_of_year');
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
        Schema::dropIfExists('cash_flows');
    }
}
