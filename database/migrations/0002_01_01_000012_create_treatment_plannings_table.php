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
        Schema::create('treatment_plannings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treatment_history_id')->constrained()->onDelete('cascade');
            $table->dateTime('timestamp')->default(now());
            $table->string('link');
            $table->string('Comment');
            $table->string('StageplanImagePath')->nullable();
            $table->string('iprImagePath')->nullable();
            $table->string('movementsImagePath')->nullable();
            $table->integer('version')->default(1);
            $table->string('trackingNumber')->default("");
            $table->dateTime('shipmentPlanning')->nullable();
            $table->dateTime('shipmentAligner')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_plannings');
    }
};
