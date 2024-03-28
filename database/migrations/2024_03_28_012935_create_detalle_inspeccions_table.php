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
        Schema::create('detalle_inspeccions', function (Blueprint $table) {
            $table->id();
            $table->integer('inspeccion_id');
            $table->string('item');
            $table->string('subitem');
            $table->string('fecha');
            $table->string('porcentaje');
            $table->string('responsable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_inspeccions');
    }
};
