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
        Schema::create('x_ray_images', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default("");
            $table->string('path')->default("");
            $table->dateTime('datetime')->default(now());
            $table->foreignId('treatment_upload_id')->constrained()->onDelete('cascade');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('x_ray_images');
    }
};
