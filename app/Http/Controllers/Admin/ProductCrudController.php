<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/products');
        CRUD::setEntityNameStrings('sản phẩm', 'các sản phẩm');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        $this->crud->addButtonFromModelFunction('line', 'viewweb', 'viewOnWeb', 'beginning');
        $this->crud->addButtonFromModelFunction('line','a','setThumbnail','beginning');
        CRUD::addColumn(['name' => 'name', 'Label' => 'Tên sản phẩm']);
        CRUD::addColumn(['name' => 'status', 'label' => 'Trạng thái', 'type' => 'select_from_array', 'options' => ['Đã đăng', 'Chưa đăng(Nháp)']]);
        CRUD::addColumn(
            [
                // run a function on the CRUD model and show its return value
                'name' => 'trade',
                'label' => 'Nhà phân phối', // Table column heading
                'type' => 'model_function',
                'function_name' => 'setTrader', // the method in your Model
            ]
        );
        CRUD::addColumn(
            [
                // run a function on the CRUD model and show its return value
                'name' => 'type',
                'label' => 'Loại', // Table column heading
                'type' => 'model_function',
                'function_name' => 'setType', // the method in your Model
            ]
        );
//        CRUD::addColumn([
//            'name' => 'trade_id',
//            'label' => 'Nhà phân phối',
//            'type'=>'select',
//            'model'=>'App\Models\Trade',
//            'entity'=>'trade',
//            'attribute'=>'name',
//        ]);
        CRUD::addColumn([
            'name' => 'category_id',
            'label' => 'Danh mục',
            'type' => 'select',
            'model' => 'App\Models\Category',
            'entity' => 'category',
            'attribute' => 'name',
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
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ProductRequest::class);

        CRUD::addField(['name' => 'name', 'Label' => 'Tên sản phẩm']);
        CRUD::addField(['name' => 'slug', 'type' => 'hidden']);
        CRUD::addField(['name' => 'status', 'label' => 'Trạng thái', 'type' => 'select_from_array', 'options' => ['Đã đăng', 'Chưa đăng(Nháp)']]);
//        CRUD::addField([
//            'name' => 'trade_id',
//            'label' => 'Nhà phân phối',
//            'type'=>'select2',
//            'model'=>'App\Models\Trade',
//            'entity'=>'trade',
//            'attribute'=>'name',
//        ]);
        CRUD::addField([
            'name' => 'category_id',
            'label' => 'Danh mục',
            'type' => 'select2',
            'model' => 'App\Models\Category',
            'entity' => 'category',
            'attribute' => 'name',
        ]);
        CRUD::addField([
            'name' => 'avatar',
            'label' => 'Ảnh sản phẩm',
            'type' => 'browse_multiple',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop' => true
        ]);
        CRUD::addField(['name' => 'short', 'label' => 'Giới thiệu ngắn']);
        CRUD::addField(['name' => 'description', 'label' => 'Chi tiết', 'type' => 'ckeditor']);
        CRUD::addField(['name' => 'code', 'label' => 'Mã Code']);
        CRUD::addField(['name' => 'price', 'label' => 'Giá khuyến mãi']);
        CRUD::addField(['name' => 'origin_price', 'label' => 'Giá gốc']);
        CRUD::addField(
            [
                // any type of relationship
                'name' => 'tags', // name of relationship method in the model
                'type' => 'relationship',
                'label' => 'Nhãn', // Table column heading
                'entity' => 'tags',
                'attribute' => 'name',
                'model' => 'App\Models\Tag',
            ]
        );
        //CRUD::addField(['name' => 'type','label'=>'Loại sản phẩm', 'type' => 'select_from_array','options'=>['Đã đăng','Chưa đăng(Nháp)']]);
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
