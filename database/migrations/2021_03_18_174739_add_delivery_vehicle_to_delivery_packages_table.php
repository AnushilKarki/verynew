<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeliveryVehicleToDeliveryPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_parcels', function (Blueprint $table) {
         
            $table->foreignId('delivery_package_id')->references('id')->on('delivery_packages')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_parcels', function (Blueprint $table) {
            $table->dropIfExists('delivery_package_id');
        
        });
    }
}
