<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DROP VIEW detailed_submitted_surveys;');
        DB::statement(
            '
            CREATE VIEW detailed_submitted_surveys AS

            SELECT
                MAX(ss.id) AS id,
                s.id AS survey_id,
                s.title,
                u.name AS created_by,
                u.email,
                MAX(r.name) AS region,
                MAX(c.name) AS city,
                MAX(v.name) AS village,
                MAX(o.name) AS organization,
                                    ss.created_at
            FROM submitted_surveys ss
            JOIN users u ON ss.user_id = u.id
            JOIN surveys s ON ss.survey_id = s.id
            JOIN region_surveys rs ON s.id = rs.survey_id
            JOIN regions r ON rs.region_id = r.id
            JOIN cities c ON r.id = c.region_id
            JOIN villages v ON c.id = v.city_id
            JOIN village_organizations vo ON vo.village_id = v.id
            JOIN organizations o ON v.id = vo.village_id
            GROUP BY ss.id, s.id, u.name, u.email, s.title,ss.created_at;
            '
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW detailed_submitted_surveys;');
        DB::statement(
            '
            CREATE VIEW detailed_submitted_surveys AS

            SELECT
                MAX(ss.id) AS id,
                s.id AS survey_id,
                s.title,
                u.name AS created_by,
                u.email,
                MAX(r.name) AS region,
                MAX(c.name) AS city,
                MAX(v.name) AS village,
                MAX(o.name) AS organization,
                ss.created_at
            FROM submitted_surveys ss
            JOIN users u ON ss.user_id = u.id
            JOIN surveys s ON ss.survey_id = s.id
            JOIN region_surveys rs ON s.id = rs.survey_id
            JOIN regions r ON rs.region_id = r.id
            JOIN cities c ON r.id = c.region_id
            JOIN villages v ON c.id = v.city_id
            JOIN village_organizations vo ON v.id = vo.village_id
            JOIN organizations o ON vo.organization_id = o.id
            GROUP BY ss.id, s.id, u.name, u.email, s.title,ss.created_at;
            '
        );
    }
};
