<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerServiceHeadTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_service_head_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('head_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->foreignId('emp_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->enum('task_status',['running','completed','failed'])->default('running');
            $table->foreignId('shop_id')->references('id')->on('shops')->onDelete('cascade')->nullable();
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('customer_service_head_tasks');
    }
}
