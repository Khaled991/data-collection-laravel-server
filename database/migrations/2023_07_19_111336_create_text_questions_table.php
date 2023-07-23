<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('text_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('survey_id')->constrained();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('text_questions');
    }
};
