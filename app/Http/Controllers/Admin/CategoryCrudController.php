<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('Danh mục', 'Các danh mục');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn(['name' => 'name', 'label' => 'Tên danh mục']);
        CRUD::addColumn(['name' => 'slug', 'label' => 'Đường dẫn']);
        CRUD::addColumn(['name' => 'type', 'label' => 'Loại', 'type' => 'select_from_array', 'options' => ['Camera', 'Thang máy','Đầu ghi']]);
        CRUD::addColumn([
            'name' => 'trademark_id',
            'label' => 'Nhà phân phối',
            'type' => 'select',
            'model' => 'App\Models\Trade',
            'entity' => 'trades',
            'attribute' => 'name',
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
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

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CategoryRequest::class);

        CRUD::addField(['name' => 'name', 'label' => 'Tên danh mục']);
        CRUD::addField(['name' => 'slug', 'type' => 'hidden', 'label' => 'Đường dẫn']);
        CRUD::addField(['name' => 'type', 'label' => 'Loại', 'type' => 'select_from_array', 'options' => ['Camera', 'Thang máy','Đầu Ghi']]);
        CRUD::addField([
            'name' => 'trademark_id',
            'label' => 'Nhà phân phối',
            'type' => 'select2',
            'model' => 'App\Models\Trade',
            'entity' => 'trades',
            'attribute' => 'name',
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }
}
