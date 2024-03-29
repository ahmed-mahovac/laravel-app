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
        Schema::create('treatment_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treatment_history_id')->constrained()->onDelete('cascade');
            $table->boolean('isAdmin');
            $table->string('name');
            $table->dateTime('timestamp')->default(now());
            $table->text('text');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatment_comments');
    }
};
