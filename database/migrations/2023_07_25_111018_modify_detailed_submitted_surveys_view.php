<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("DROP VIEW detailed_submitted_surveys;");
        DB::statement(
            "
            CREATE VIEW detailed_submitted_surveys AS
                SELECT ss.id, s.id AS survey_id, s.title, u.name AS created_by, u.email, r.name AS region, c.name AS city, v.name AS village, o.name AS organization
                FROM submitted_surveys ss
                JOIN users u ON ss.user_id = u.id
                JOIN surveys s ON ss.survey_id = s.id
                JOIN region_surveys rs ON s.id = rs.survey_id
                JOIN regions r ON rs.region_id = r.id
                JOIN cities c ON r.id = c.region_id
                JOIN villages v ON c.id = v.city_id
                JOIN organizations o ON v.id = o.village_id;
            "
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW detailed_submitted_surveys;");
        DB::statement(
            "
            CREATE VIEW detailed_submitted_surveys AS
            SELECT s.id, s.title, u.name AS created_by, u.email, r.name AS region, c.name AS city, v.name AS village, o.name AS organization
            FROM submitted_surveys ss
            JOIN users u ON ss.user_id = u.id
            JOIN surveys s ON ss.survey_id = s.id
            JOIN region_surveys rs ON s.id = rs.survey_id
            JOIN regions r ON rs.region_id = r.id
            JOIN cities c ON r.id = c.region_id
            JOIN villages v ON c.id = v.city_id
            JOIN organizations o ON v.id = o.village_id;
            "
        );
    }
};
