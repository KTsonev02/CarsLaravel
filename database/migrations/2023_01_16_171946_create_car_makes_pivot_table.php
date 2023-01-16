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
        Schema::create('car_makes_pivot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')
                ->constrained('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('car_make_id')
                ->constrained('car_makes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('car_makes_pivot');
    }
};
