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
        Schema::create('product_packages', function (Blueprint $table) {
            $table->id();
            $table->string('nameEn');
            $table->string('nameDe');
            $table->string('nameEs');
            $table->text('textDe')->default('');
            $table->text('textEs')->default('');
            $table->text('textEn')->default('');
            $table->string('iconPath')->nullable();
            $table->integer('stages');
            $table->integer('refinementCount');
            $table->integer('refinementStages');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_packages');
    }
};
