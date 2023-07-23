<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('option_questions', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('description');
            $table->foreignId('survey_id')->constrained();
            $table->enum('question_type', ['choose', 'multiple']);
            $table->boolean('is_other_option_enabled');
            $table->boolean('is_other_option_text_enabled');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('option_questions');
    }
};
