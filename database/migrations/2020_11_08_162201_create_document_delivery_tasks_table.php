<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentDeliveryTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_delivery_tasks', function (Blueprint $table) {
            $table->id();
            $table->enum('available_time',['morning','day','evening','night']);
            $table->foreignId('head_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->foreignId('rider_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->enum('task_status',['pending','on_way','completed','failed'])->default('pending');
            $table->foreignId('delivery_id')->references('id')->on('delivery_documents')->onDelete('cascade')->nullable();
            $table->foreignId('delivery')->references('id')->on('deliveries')->onDelete('cascade')->nullable();
            $table->float('head_earning');
            $table->float('rider_earning');
            $table->foreignId('route_id')->references('id')->on('routes')->onDelete('cascade')->nullable();
            
             
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
        Schema::dropIfExists('document_delivery_tasks');
    }
}
