<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancialReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('army_id')->references('id')->on('employee_profiles')->onDelete('cascade')->nullable();
            $table->dateTime('from', 0);
            $table->dateTime('to', 0);
            $table->float('total_credit_amount',8,2);
            $table->float('total_earning_amount',8,2);
            $table->float('total_reward_amount',8,2);
            $table->integer('total_task_point');
            $table->integer('total_finance_task_completed');
            $table->integer('total_finance_task_failed');
            $table->integer('total_team_task_completed');
            $table->integer('total_team_task_failed');

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
        Schema::dropIfExists('financial_reports');
    }
}
