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
            $table->enum('delivery_type',['parcel','groceries','food','document','ridesharing','courier']);
            $table->float('delivery_rate')->nullable();
            $table->float('delivery_max_rate')->nullable();
            $table->float('delivery_rider_rate')->nullable();
            $table->float('delivery_rider_max_rate')->nullable();
            $table->string('total_days')->nullable();
            $table->foreignId('area_id')->references('id')->on('areas')->onDelete('cascade')->nullable();
            $table->float('delivery_weight')->nullable();
            $table->float('delivery_distance')->nullable();
            $table->float('hourly_rate')->nullable();
            $table->float('delivery_additional_rate')->nullable();
            $table->enum('delivery_vehicle',['motorbike','cycle','electric_bike','electric_car','van','truck','taxi','bus','other']);
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
