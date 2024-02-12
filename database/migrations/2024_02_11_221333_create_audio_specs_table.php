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
        Schema::create('audio_specs', function (Blueprint $table) {
            $table->integer('product_id')->primary();
            $table->string('battery_life', 200);
            $table->string('microphone', 110);
            $table->string('noise_cancellation', 230);
            $table->string('add_features', 170);
            $table->string('color', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audio_specs');
    }
};
