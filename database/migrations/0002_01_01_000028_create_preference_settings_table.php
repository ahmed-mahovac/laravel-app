<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenceSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('preference_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('preference_categories')->onDelete('cascade');
            $table->string('nameEn');
            $table->string('nameDe');
            $table->string('nameEs');
            $table->boolean('defaultValue');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preference_settings');
    }
}
