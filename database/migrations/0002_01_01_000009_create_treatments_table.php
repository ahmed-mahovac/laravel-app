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
        Schema::create('treatments', function (Blueprint $table) {
            $table->id();
            $table->integer('treatmentNumber')->default(1);
            $table->enum('status', ['NEW', 'DRAFT', 'SUBMITTED', 'REJECTED', 'DATA_MISSING', 'IN_PLANNING', 'FOR_REVIEW', 'CANCELLED', 'IN_PRODUCTION', 'SHIPPING', 'IN_TREATMENT', 'COMPLETED', 'CASE_WILL_BE_CLOSED']);
            $table->foreignId('product_id')->nullable()->onDelete('set null');
            $table->foreignId('patient_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('medical_information_id')->nullable()->constrained()->onDelete('set null');
            $table->dateTime('timestamp')->useCurrent();
            $table->foreignId('history_id')->nullable()->onDelete('set null');
            $table->foreignId('parent_treatment_id')->nullable()->constrained('treatments')->onDelete('set null');
            $table->foreignId('doctor_office_rel_id')->constrained()->onDelete('cascade');
            $table->string('offerPath')->nullable();
            $table->string('billPath')->nullable();
            $table->string('treatmentPlanPath')->nullable();
            $table->enum('treatmentType', ['TREATMENT', 'REFINEMENT', 'RETAINER'])->default('TREATMENT');
            $table->dateTime('expirationDate')->nullable();
            $table->foreignId('medical_preferences_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treatments');
    }
};
