<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('delivery_id')->references('id')->on('deliveries')->onDelete('cascade')->nullable();
            $table->foreignId('service_id')->references('id')->on('services')->onDelete('cascade')->nullable();
            $table->foreignId('finance_id')->references('id')->on('finances')->onDelete('cascade')->nullable();
            $table->foreignId('marketing_id')->references('id')->on('marketings')->onDelete('cascade')->nullable();
            $table->foreignId('training_id')->references('id')->on('trainings')->onDelete('cascade')->nullable();
            $table->string('particular');
            $table->text('objective');
            $table->text('detail');
            $table->enum('task_type',['marketing','customer','delivery','financial','training']);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('tasks');
    }
}
