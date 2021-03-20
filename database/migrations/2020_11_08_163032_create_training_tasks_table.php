<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->foreignId('intern_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->enum('task_status',['pending','running','completed','failed'])->default('pending');
            $table->foreignId('training_id')->references('id')->on('trainings')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('training_tasks');
    }
}
