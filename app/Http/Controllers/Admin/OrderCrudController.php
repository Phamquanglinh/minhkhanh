<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings('đơn hàng', 'những đơn hàng');
        $this->crud->enableDetailsRow();
        $this->crud->denyAccess("create");
        $this->crud->denyAccess("show");
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addButtonFromModelFunction('line', 'detai', 'showDetail', 'line');
        CRUD::addColumn([
            'name' => 'user_id',
            'label' => 'Khách hàng',
            'type' => 'select',
            'model' => 'App\Models\User',
            'entity' => 'user',
            'attribute' => 'name',
        ]);
        CRUD::addColumn(['name' => 'phone', 'type' => 'phone', 'label' => 'Số điện thoại']);
        CRUD::addColumn(['name' => 'address', 'type' => 'text', 'label' => 'Địa chỉ']);
        CRUD::addColumn(['name' => 'code', 'type' => 'text', 'label' => 'Mã đơn']);
        CRUD::addColumn(['name' => 'status', 'type' => 'select_from_array', 'label' => 'Trạng thái','options'=>['Chưa giao','Đang giao hàng','Đã giao','Đã hủy','Đã hoàn trả']]);


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
        CRUD::setValidation(OrderRequest::class);

        CRUD::addField(['name' => 'status', 'type' => 'select_from_array', 'label' => 'Trạng thái','options'=>['Chưa giao','Đang giao hàng','Đã giao','Đã hủy','Đã hoàn trả']]);


        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    protected function showDetailsRow($id)
    {
        $total = 0;
        $avatars = [];
        $order = Order::find($id);
        $carts = $order->carts()->get();

        foreach ($carts as $index => $cart) {
            $tmp = str_replace(['[', ']', '"'], "", $cart->getProduct()->first()->avatar);
            $avatars[$index] = explode(",", $tmp)[0];
            $total += $cart->getProduct()->first()->price * $cart->quantity;
        }

        return view('vendor.order', ['order' => $order, 'carts' => $carts, 'avatar' => $avatars, 'total' => $total]);
    }
}
