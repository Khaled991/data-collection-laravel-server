<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("
        INSERT INTO [dbo].[user_organizations] ([organization_id], [user_id])
        VALUES 
            (5, 5),
            (4, 4),
            (3, 3),
            (2, 2),
            (1, 1);
        ");
        DB::statement("
        INSERT INTO [dbo].[region_surveys] ([region_id], [survey_id])
        VALUES 
            (5, 5),
            (4, 4),
            (3, 3),
            (2, 2),
            (1, 1);
        ");
    }
}
