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
        Schema::table('option_questions', function (Blueprint $table) {
            $table->dropColumn('is_other_option_enabled');
            $table->dropColumn('is_other_option_text_enabled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('option_questions', function (Blueprint $table) {
            $table->boolean('is_other_option_enabled');
            $table->boolean('is_other_option_text_enabled');
        });
    }
};
