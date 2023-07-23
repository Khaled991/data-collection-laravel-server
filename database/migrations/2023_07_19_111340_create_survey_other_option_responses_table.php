<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('survey_other_option_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_question_id')->constrained();
            $table->foreignId('submitted_survey_id')->constrained();
            $table->string('other_text_response')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('survey_other_option_responses');
    }
};
