<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SurveyRequest;
use App\Models\Region;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SurveyCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SurveyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::enableExportButtons();
        CRUD::setModel(\App\Models\Survey::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/survey');
        CRUD::setEntityNameStrings('survey', 'surveys');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     *
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('title');
        CRUD::column('description');
        $this->crud->addColumn([
            'name' => 'is_active',
            'label' => 'Is Active',
            'type' => 'closure',
            'function' => function ($entry) {
                return $entry->is_active ? 'Yes' : 'No';
            },
        ]);
        CRUD::addColumn([
            'name' => 'regions',
            'label' => 'Regions',
            'type' => 'select_multiple',
            'entity' => 'regions',
            'model' => Region::class,

        ]);
        CRUD::addColumn([
            'name' => 'created_at',
            'label' => 'Created At',
            'type' => 'datetime',
        ]);
        CRUD::addColumn([
            'name' => 'updated_at',
            'label' => 'Updated At',
            'type' => 'datetime',
        ]);
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
     *
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SurveyRequest::class);

        CRUD::field('title');
        CRUD::field('description');
        CRUD::field([   // relationship
            'name' => 'regions', // the method on your model that defines the relationship
            'type' => 'relationship',
            'label' => 'Regions',
            'attribute' => 'name', // attribute on model that is shown to user
            'placeholder' => 'Select a Region', // placeholder for the select2 input

        ]);
        CRUD::field('is_active');

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
     *
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
