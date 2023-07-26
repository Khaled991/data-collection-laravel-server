<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Organization;
use App\Models\Region;
use App\Models\SubmittedSurvey;
use App\Models\Survey;
use App\Models\User;
use App\Models\Village;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class DashboardCrudController extends CrudController
{
    public function setup()
    {
        // Setup the CRUD logic if needed (optional)
    }

    public function index()
    {

        $data = [
            'admins' => User::where(["is_admin" => true])->count(),
            'users' => User::where(["is_admin" => false])->count(),
            'regions' => Region::count(),
            'cities' => City::count(),
            'villages' => Village::count(),
            'orgainzations' => Organization::count(),
            'active_survey' => Survey::where(["is_active" => true])->count(),
            'inactive_survey' => Survey::where(["is_active" => false])->count(),
            'submitted_surveys' => SubmittedSurvey::count(),
        ];

        return view('vendor.backpack.theme-tabler.dashboard')->with($data);
    }
}
