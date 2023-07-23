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
        Schema::create('region_surveys', function (Blueprint $table) {
            $table->foreignId('region_id')->constrained();
            $table->foreignId('survey_id')->constrained();
            $table->primary(['region_id', 'survey_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_surveys');
    }
};
