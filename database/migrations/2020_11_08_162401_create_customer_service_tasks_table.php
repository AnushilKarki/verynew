<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerServiceTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_service_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('head_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->foreignId('army_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->enum('task_status',['pending','on_way','completed','failed'])->default('pending');
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade')->nullable();
            $table->float('head_earning');
            $table->float('service_earning');
            $table->enum('available_time',['morning','day','evening','night','all']);
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
        Schema::dropIfExists('customer_service_tasks');
    }
}
