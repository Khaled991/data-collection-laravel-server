<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('submitted_survey_text_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('text_question_id')->constrained();
            $table->foreignId('submitted_survey_id')->constrained();
            $table->string('text_response');
            $table->index('text_response');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('submitted_survey_text_responses');
    }
};
