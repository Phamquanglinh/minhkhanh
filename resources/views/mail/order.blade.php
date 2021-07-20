<div style="background: #d54747;padding: 20px">
    <div style="background: white;padding: 10px;max-width: 450px;margin: auto; border-radius:15px ">
        <div class="p-1 rounded">
            <h3 style="">
                Đơn hàng của <b>{{$order->user()->first()->name}}</b>
            </h3>
            <hr>
            <div class="border p-2 bg-white">
            <!--            @foreach($carts as $index => $cart)-->
                <div class="text-dark bg-light">
                    <a href="{{route('products',[$cart->getProduct()->first()->slug])}}" class="link-style-none">
                        {{$cart->getProduct()->first()->name}}
                    </a><span> x {{$cart->quantity}}</span>
                    <div class="w-25 d-flex">
                        <span class="d-flex p-1 flex-column">
                                <span class="text-primary font-weight-bold h5">{{number_format($cart->getProduct()->first()->price)}} đ</span>
                            </span>
                    </div>
                </div>
                <!--            @endforeach-->
            </div>
            <hr>
            <div class="border p-3">
                <div><b>Tổng thanh toán</b> : {{number_format($total)}} đ</div>
                <div><b>Địa chỉ ship hàng</b> : {{$order->address}}</div>
                <div><b>Số điện thoại </b>: {{$order->phone}}</div>
                <div><b>Email</b> : {{$order->user()->first()->email}}</div>
            </div>
        </div>
    </div>
</div>
