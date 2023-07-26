<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Operations\ShowResultOperation;
use App\Models\SubmittedSurveyTextResponse;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DetailedSubmittedSurveysCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DetailedSubmittedSurveysCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ShowResultOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\DetailedSubmittedSurveys::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/detailed-submitted-surveys');
        CRUD::setEntityNameStrings('detailed submitted surveys', 'detailed submitted surveys');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        // CRUD::addButtonFromView('line', 'show_result', 'show_result', 'beginning');


        CRUD::column('title');
        // CRUD::addColumn([
        //     'name' => 'submittedSurveyTextResponses',
        //     'label' => 'Text Responses',
        //     'type' => 'select_multiple',
        //     'entity' => 'submittedSurveyTextResponses', // Relationship method name
        //     'attribute' => 'text_response', // Attribute
        //     'model' => SubmittedSurveyTextResponse::class,
        //     // 'pivot' => true, // Set to true for many-to-many relationships
        // ]);
        // CRUD::column('created_by');
        // CRUD::column('email');
        // CRUD::column('region');
        // CRUD::column('city');
        // CRUD::column('village');
        // CRUD::column('organization');


        // CRUD::addColumn([
        //     'name' => 'submittedSurveyTextResponses.id',
        //     "label" => "Text Response",
        // ],);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::field('title');
        CRUD::field('created_by');
        CRUD::field('email');
        CRUD::field('region');
        CRUD::field('city');
        CRUD::field('village');
        CRUD::field('organization');
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
