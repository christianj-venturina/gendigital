<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_specs', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('operating_system', 50);
            $table->string('processor', 90);
            $table->string('memory', 20);
            $table->string('storage', 15);
            $table->string('rear_cam_mp', 100);
            $table->string('front_cam_mp', 70);
            $table->string('display', 80);
            $table->string('battery_capacity', 70);
            $table->string('charger', 60);
            $table->string('usb_interface', 30);
            $table->string('sim_slots', 50);
            $table->string('external_memory', 30);
            $table->string('color', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobile_specs');
    }
};
