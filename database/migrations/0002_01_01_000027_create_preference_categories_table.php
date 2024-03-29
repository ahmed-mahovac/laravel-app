<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferenceCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('preference_categories', function (Blueprint $table) {
            $table->id();
            $table->string('nameEn');
            $table->string('nameDe');
            $table->string('nameEs');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('preference_categories');
    }
}
