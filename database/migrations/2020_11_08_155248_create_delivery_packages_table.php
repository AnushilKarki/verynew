<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_packages', function (Blueprint $table) {
            $table->id();
            $table->string('particular');
            $table->enum('delivery_type',['express','standard','courier','custom'])->default('standard');
            $table->float('delivery_rate')->nullable();
            $table->integer('total_days')->nullable();
            $table->float('delivery_weight')->nullable();
            $table->float('delivery_distance')->nullable();
            $table->float('delivery_additional_rate')->nullable();
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
        Schema::dropIfExists('delivery_packages');
    }
}
