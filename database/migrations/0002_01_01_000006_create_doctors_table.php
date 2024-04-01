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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('titlePrefixed')->default('');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('titleSuffixed')->default('');
            $table->foreignId('login_id')->constrained()->onDelete('cascade');
            $table->foreignId('vendor_id')->nullable()->constrained()->onDelete('set null');
            $table->string('clientNr');
            $table->string('prefixNo');
            $table->integer('patientCounter')->default(0);
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->foreignId('medical_preferences_id')->nullable()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
