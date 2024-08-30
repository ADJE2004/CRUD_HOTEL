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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); 
           
            $table->unsignedBigInteger('hotel_id'); 
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            
            $table->string('nom');
            $table->integer('prix');
            $table->integer('nombre_lits');
            $table->integer('max_adulte');
            $table->integer('max_enfants')->nullable();
            $table->boolean('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
