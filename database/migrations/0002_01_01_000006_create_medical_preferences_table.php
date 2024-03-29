<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalPreferencesTable extends Migration
{
    public function up()
    {
        Schema::create('medical_preferences', function (Blueprint $table) {
            $table->id();
            $table->boolean('iprActivated')->default(false);
            $table->tinyInteger('iprStageFrom')->nullable()->unsigned();
            $table->decimal('iprMax', 2, 1)->nullable();
            $table->boolean('attachmentsActivated')->default(false);
            $table->tinyInteger('attachmentsStageFrom')->nullable()->unsigned();
            $table->text('attachmentsRetentionsattachmentsOn')->nullable();
            $table->boolean('attachmentsAsLittleAsPossible')->nullable();
            $table->boolean('interproxDentalBuildUpAllowInterproxDentalBuildUp')->nullable();
            $table->boolean('stagingPlanningEqualStagesInUpperAndLowerJaw')->nullable();
            $table->enum('dissolveCrowdedTeeth', ['ASR', 'PROTRUSION', 'WIDEN_GUMS'])->nullable();
            $table->boolean('correctionOfOcclusionCorrectClass')->nullable();
            $table->tinyInteger('correctionOfOcclusionBeginFromStage')->nullable()->unsigned();
            $table->enum('correctionOfOcclusionCanines', ['CUTOUTS', 'BUTTONS'])->nullable();
            $table->enum('correctionOfOcclusionMolares', ['CUTOUTS', 'BUTTONS'])->nullable();
            $table->boolean('correctionOfOcclusionAllowMinipins')->nullable();
            $table->boolean('crossbiteCorrectionAllowRubberBan')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('doctor_id')->constrained()->onDelete('cascade');
            // Add other fields as needed
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medical_preferences');
    }
}
