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
        Schema::create('laptop_specs', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('operating_system', 30);
            $table->string('processor', 50);
            $table->string('memory', 50);
            $table->string('storage', 50);
            $table->string('display', 80);
            $table->string('graphics', 150);
            $table->string('usb_ports', 80);
            $table->string('hdmi', 30);
            $table->string('ram_slots', 30);
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
        Schema::dropIfExists('laptop_specs');
    }
};
