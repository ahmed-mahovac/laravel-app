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
        Schema::create('malocclusions', function (Blueprint $table) {
            $table->id();
            $table->integer('orderNo');
            $table->string('textEn');
            $table->string('textDe');
            $table->string('textEs');
            $table->boolean('allowBest');
            $table->foreignId('package_id')->constrained('product_packages')->onDelete('cascade');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('malocclusions');
    }
};
