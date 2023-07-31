<?php

namespace App\Http\Controllers\Admin;

use App\Models\Option;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OptionQuestionCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OptionQuestionCrudController extends CrudController
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
        CRUD::setModel(\App\Models\OptionQuestion::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/option-question');
        CRUD::setEntityNameStrings('main question', 'main question');
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
        CRUD::column('survey');
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
            'name' => 'options',
            'label' => 'Options',
            'type' => 'select_multiple',
            'entity' => 'options',
            'model' => Option::class,

        ]);
        CRUD::column('question_type');
        CRUD::column('created_at');
        CRUD::column('updated_at');

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
        $this->crud->addField([
            'name' => 'survey',
            'label' => 'Survey',
            'attribute' => 'title',
            'type' => 'select',
        ]);
        CRUD::field('title');
        CRUD::field('description');
        $this->crud->addField([
            'name' => 'question_type',
            'label' => 'Question Type',
            'type' => 'enum',
            'options' => ['multiple' => 'Multiple', 'choose' => 'Choose'],
        ]);
        CRUD::field('is_active')->default(true);

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
