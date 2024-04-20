<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tables', function (Blueprint $table) {
          
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->double('kilo_current')->nullable();
            $table->double('kilo_consumed')->nullable();
            $table->double('hour_current')->nullable();
            $table->double('hour_consumed')->nullable();
            $table->double('dieselQty');
            $table->double('concreteQtyM3');
            $table->double('trips');
            $table->double('tripPerGal');
            $table->double('concreteM3PerGal');
            $table->unsignedBigInteger('maintlbs_id');
            $table->foreign('maintlbs_id')->references('id')->on('maintlbs'); //seeder
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tables');
    }
};
