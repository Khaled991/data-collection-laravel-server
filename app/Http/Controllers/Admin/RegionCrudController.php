<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RegionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RegionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RegionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Region::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/region');
        CRUD::setEntityNameStrings('region', 'regions');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::addColumn([
            'name' => 'cities',
            'label' => 'Cities',
            'type' => 'select_multiple',
            'entity' => 'cities', // Relationship method name
            'attribute' => 'name', // Assuming 'name' is the column name for the city name
            'model' => City::class, // The City model class
            // 'pivot' => true, // Set to true for many-to-many relationships
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



        // CRUD::column('city_id');
        // CRUD::column('organization_id');

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
        CRUD::field('name');
        // CRUD::field('city_id');
        // CRUD::field('organization_id');
        // CRUD::field([   // relationship
        //     'name' => 'cities', // the method on your model that defines the relationship
        //     'type' => "relationship",
        //     'label' => "Cities",
        //     'attribute' => "City", // attribute on model that is shown to user
        //     'placeholder' => "Select a city", // placeholder for the select2 input

        // ]);
        // CRUD::field([   // relationship
        //     'name' => 'organizations', // the method on your model that defines the relationship
        //     'type' => "relationship",
        //     'label' => "Organizations",
        //     'attribute' => "Organization", // attribute on model that is shown to user
        //     'placeholder' => "Select an Organization", // placeholder for the select2 input

        // ]);
        //TODO: uncomment
        // CRUD::field([   // relationship
        //     'name' => 'surveys', // the method on your model that defines the relationship
        //     'type' => "relationship",
        //     'label' => "Surveys",
        //     'attribute' => "Survey", // attribute on model that is shown to user
        //     'placeholder' => "Select a Survey", // placeholder for the select2 input

        // ]);


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
