<?php

namespace App\Http\Controllers\Admin\Operations;

use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Route;

trait ShowResultOperation
{
    /**
     * Define which routes are needed for this operation.
     *
     * @param string $segment    Name of the current entity (singular). Used as first URL segment.
     * @param string $routeName  Prefix of the route name.
     * @param string $controller Name of the current CrudController.
     */
    protected function setupShowResultRoutes($segment, $routeName, $controller)
    {
        Route::get($segment . '/{id}/show-result', [
            'as'        => $routeName . '.showResult',
            'uses'      => $controller . '@showResult',
            'operation' => 'showResult',
        ]);
    }

    /**
     * Add the default settings, buttons, etc that this operation needs.
     */
    protected function setupShowResultDefaults()
    {
        CRUD::allowAccess('showResult');

        CRUD::operation('showResult', function () {
            CRUD::loadDefaultOperationSettingsFromConfig();
        });

        CRUD::operation('list', function () {
            CRUD::addButtonFromView('line', 'show_result', 'show_result', 'beginning');
        });
    }
    /**
     * Show the view for performing the operation.
     *
     * @return Response
     */
    public function showResult()
    {
        CRUD::hasAccessOrFail('showResult');

        // prepare the fields you need to show
        $this->data['crud'] = $this->crud;
        $this->data['title'] = CRUD::getTitle() ?? 'Show Result ' . $this->crud->entity_name;

        // load the view
        return view('crud::operations.show_result', $this->data);
    }
}
