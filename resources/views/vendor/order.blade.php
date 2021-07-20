<div class="container">
    <div class="p-1 rounded">
        <div class="p-2 h3 bg-white rounded">
            Đơn hàng của <b>{{$order->user()->first()->name}}</b>
        </div>
        <div class="border p-2 bg-white">
            @foreach($carts as $index => $cart)
                <div class="text-dark bg-light">
                    <div class="w-25 d-flex">
                        <img src="{{env('app_url')."/".$avatar[$index]}}" class="w-50">
                        <span class="d-flex p-1 flex-column">
                                <span class="text-primary font-weight-bold h5">{{number_format($cart->getProduct()->first()->price)}} đ</span>
                                <del
                                    class="text-muted">{{number_format($cart->getProduct()->first()->origin_price)}} đ</del>
                            </span>
                    </div>
                    <a href="{{route('products',[$cart->getProduct()->first()->slug])}}" class="link-style-none">
                        {{$cart->getProduct()->first()->name}}
                    </a><span> x {{$cart->quantity}}</span>
                </div>
            @endforeach
        </div>
        <hr>
        <div class="border p-3">
            <p>Tổng thanh toán : {{number_format($total)}} đ</p>
            <p>Địa chỉ ship hàng : {{$order->address}}</p>
            <p>Số điện thoại : {{$order->phone}}</p>
            <p>Email : {{$order->user()->first()->email}}</p>
            <button class="btn btn-primary">Xác nhận đã ship</button>
        </div>
    </div>
</div>
