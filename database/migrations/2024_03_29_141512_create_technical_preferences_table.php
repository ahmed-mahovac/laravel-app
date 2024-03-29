<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalPreferencesTable extends Migration
{
    public function up()
    {
        Schema::create('technical_preferences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            $table->boolean('isDefault');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('technical_preferences');
    }
}
