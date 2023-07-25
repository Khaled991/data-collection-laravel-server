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
            DB::statement(
                "
                IF OBJECT_ID('active_surveys', 'V') IS NOT NULL
                    DROP VIEW active_surveys;

                EXEC('CREATE VIEW active_surveys AS
                SELECT s.id, s.title, s.description, u.name AS user_name, o.name AS organization, r.name AS region, c.name AS city, v.name AS village, u.id AS user_id, s.created_at
                FROM users u
                JOIN user_organizations uo ON u.id = uo.user_id
                JOIN organizations o ON uo.organization_id = o.id
                JOIN villages v ON o.village_id = v.id
                JOIN cities c ON v.city_id = c.id
                JOIN regions r ON c.region_id = r.id
                JOIN region_surveys rs ON r.id = rs.region_id
                JOIN surveys s ON rs.survey_id = s.id
                WHERE s.is_active = 1;');
                "
            );
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            DB::statement("DROP VIEW active_surveys");
        }
    };
