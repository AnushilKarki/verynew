<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryHeadTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_head_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('head_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->foreignId('emp_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->enum('task_status',['pending','completed','failed'])->default('pending');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade')->nullable();
            $table->foreignId('delivery_id')->references('id')->on('deliveries')->onDelete('cascade')->nullable();
            $table->string('task')->nullable();
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
        Schema::dropIfExists('delivery_head_tasks');
    }
}
