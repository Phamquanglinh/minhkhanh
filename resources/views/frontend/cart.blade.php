@php
    $title = "Giỏ hàng của ".backpack_user()->name;
    $cartList = [];
@endphp
@extends("layout.main")
@section("custom-library")
    <style>
        .quantity {
            width: 45px !important;
            flex: none !important;
        }

        .scroll {
            overflow: scroll;
        }
    </style>
@endsection
@section("content")
    <div class="container">
        <!--Section: Block Content-->
        @if($carts->count() > 0 )
            <section>
                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-8">
                        <!-- Card -->
                        <div class="mb-3">
                            <div class="pt-4 wish-list">
                                @foreach($carts  as $index => $cart)
                                    @if($cart->order_id==null)
                                        @php
                                            $cartList[] =$cart->id;
                                        @endphp
                                        <div class="row mb-4 bg-light py-3 rounded px-1">
                                            <div class="col-md-5 col-lg-3 col-xl-3">
                                                <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                                                    <img class="img-fluid w-100"
                                                         src="{{env("APP_URL")."/".$cart->avatar}}"
                                                         alt="product">
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-lg-9 col-xl-9">
                                                <div>
                                                    <div class="">
                                                        <div>
                                                            <h5>{{$cart->getProduct()->first()->name}}</h5>
                                                            @foreach($cart->getProduct()->first()->tags()->get() as $tag)
                                                                <div class="badge badge-danger">{{$tag->name}}</div>
                                                            @endforeach
                                                            <div>
                                                                <small class="text-muted">
                                                                    <del>{{number_format($cart->getProduct()->first()->origin_price)}}
                                                                        đ
                                                                    </del>
                                                                </small>
                                                                <span class="font-weight-bold pl-1 text-danger">{{number_format($cart->getProduct()->first()->price)}} đ</span>
                                                            </div>
                                                            <div>
                                                                <small>Danh mục:
                                                                    <a href="{{route("category",$cart->getProduct()->first()->category()->first()->slug)}}">
                                                                        {{$cart->getProduct()->first()->category()->first()->name}}</a>
                                                                </small>
                                                            </div>
                                                            <div>
                                                                <small>Nhãn hiệu:
                                                                    <a href="#">
                                                                        {{$cart->getProduct()->first()->category()->first()->trades()->first()->name}}</a>
                                                                </small>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="input-group number-input mb-0 w-100">
                                                                <button class=" rounded-0 btn btn-outline-danger minus"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                                    -
                                                                </button>
                                                                <input class="quantity" min="1"
                                                                       name="quantity" value="{{$cart->quantity}}"
                                                                       price="{{$cart->getProduct()->first()->price}}"
                                                                       cart_id="{{$cart->id}}"
                                                                       type="number" required/>
                                                                <button class="btn btn-outline-danger rounded-0 plus"
                                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                                    +
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=" align-items-center">
                                                        <div>
                                                            <a href="{{route("products",$cart->getProduct()->first()->slug)}}"
                                                               type="button"
                                                               class="card-link-secondary small text-uppercase mr-3 text-danger"><i
                                                                    class="fas fa-eye mr-1"></i>Xem chi tiết</a>
                                                            <a href="{{route("cart.delete",$cart->id)}}" type="button"
                                                               class="card-link-secondary small text-uppercase mr-3 text-danger"><i
                                                                    class="fas fa-trash-alt mr-1"></i>Xóa khỏi giỏ hàng</a>

                                                        </div>
                                                        <p class="mb-0 text-danger h3 price" id="product-{{$cart->id}}">
                                                        <span><strong
                                                                data="{{$cart->getProduct()->first()->price*$cart->quantity}}">{{number_format($cart->getProduct()->first()->price*$cart->quantity)}} đ</strong></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4">

                        <!-- Card -->
                        <div class="mb-3">
                            <div class="pt-4">

                                <h5 class="mb-3">Thông tin thanh toán</h5>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item  align-items-center  d-flex justify-content-between border-0 px-0 pb-0">
                                        <strong>Đơn giá</strong>
                                        <span id="basic-example-price">270,000 đ</span>
                                    </li>
                                    <li class="list-group-item  align-items-center d-flex justify-content-between border-0 px-0 pb-0">
                                        <strong>VAT(10%)</strong>
                                        <span id="basic-example-vat">0 đ</span>
                                    </li>
                                    <li class="list-group-item  align-items-center d-flex justify-content-between border-0 px-0 mb-3">
                                        <strong>Tổng</strong>
                                        <span><strong id="basic-example-total"
                                                      class="text-danger">270,000 đ</strong></span>
                                    </li>
                                </ul>

                                <button class="btn btn-danger w-100" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                    Thanh toán
                                </button>

                            </div>
                        </div>
                        <!-- Card -->
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                @if(isset($customer))
                                    <div class="text-danger font-weight-bold">Thông tin khách hàng</div>
                                    <small>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                                <div><strong>Họ và tên: </strong></div>
                                                <span>{{$customer->user()->first()->name}}</span>
                                            </li>
                                            <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                                <div>
                                                    <strong>Email: </strong>
                                                </div>
                                                <span>{{$customer->user()->first()->email}}</span>
                                            </li>
                                            <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                                <div>
                                                    <strong>Số điện thoại: </strong>
                                                </div>
                                                <span>{{$customer->phone}}</span>
                                            </li>
                                            <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                                <div>
                                                    <strong>Địa chỉ nhận hàng: </strong>
                                                </div>
                                                <span>{{$customer->address}}</span>
                                            </li>
                                            <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                                <a href="{{route("profile.index")}}" class="text-danger">Chỉnh sủa thông
                                                    tin</a>
                                            </li>
                                        </ul>
                                    </small>
                                    <button type="button" class="btn btn-danger w-100 mt-3" data-toggle="modal"
                                            data-target="#exampleModalCenter">
                                        Xác nhận thanh toán
                                    </button>
                                @else
                                    <li class="list-group-item  align-items-center border-0 px-0 pb-0">
                                        <small class="text-danger">*Chưa có thông tin giao hàng</small>
                                        <a href="{{route("profile.index")}}"
                                           class="btn btn-danger mt-3 link-style-none text-white">Thêm thông tin</a>
                                    </li>
                                @endif
                            </div>
                        </div>
                        <!-- Card -->
                        {{--                    <div class="mb-3">--}}
                        {{--                        <div class="pt-4">--}}

                        {{--                            <a class="dark-grey-text " data-toggle="collapse"--}}
                        {{--                               href="#collapseExample"--}}
                        {{--                               aria-expanded="false" aria-controls="collapseExample">--}}
                        {{--                                Add a discount code (optional)--}}
                        {{--                                <span><i class="fas fa-chevron-down pt-1"></i></span>--}}
                        {{--                            </a>--}}

                        {{--                            <div class="collapse" id="collapseExample">--}}
                        {{--                                <div class="mt-3">--}}
                        {{--                                    <div class="md-form md-outline mb-0">--}}
                        {{--                                        <input type="text" id="discount-code" class="form-control font-weight-light"--}}
                        {{--                                               placeholder="Enter discount code">--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </section>
    @else
            <div class="container">
                <div class="text-danger pt-4">
                    Giỏ hàng trống , hãy quay lại tìm kiếm sản phẩm !
                </div>
            </div>
    @endif
    <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route("order.add")}}" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận thanh toán</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            @csrf
                            @if(isset($customer))
                                <input name="phone" value="{{$customer->phone}}" hidden>
                                <input name="address" value="{{$customer->address}}" hidden>
                                <input name="carts" value="{{implode('-',$cartList)}}" hidden>
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Lời nhắn thêm</label>
                                <textarea class="form-control" name="note" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-dismiss="modal">Suy nghĩ lại</button>
                            <button type="submit" class="btn btn-danger">Gửi thông tin mua</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-4">
    <div class="container">
        <div class="pt-4">
            <h5 class="mb-4">Lịch sử đơn hàng</h5>
        </div>
    </div>
@endsection
@section("loaded")
    <script>
        $(document).ready(function () {
            $(".cart").hide();

            function formatNumber(num) {
                return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
            }

            function calculateTotalBill() {
                var tong = 0;
                $(".price strong").each(function () {
                    console.log($(this).attr("data"));
                    tong = tong + parseInt($(this).attr("data"))
                })
                $("#basic-example-total").text(formatNumber(tong) + " đ");
                $("#basic-example-price").text(formatNumber(tong) + " đ");
            }

            calculateTotalBill();

            function updatePrice(id, quantity) {
                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart.updatePrice') }}",
                    data: {"_token": "{{csrf_token()}}", "id": id, "quantity": quantity},

                    success: function (data) {
                        document.getElementById("product-" + id).innerHTML = "<span>" + data + "</span>";
                        calculateTotalBill()
                    }
                });
            }

            $(".quantity").change(function () {
                console.log($(this).attr("cart_id"));
                console.log($(this).val());
                updatePrice($(this).attr("cart_id"), $(this).val());
            });

            $(".plus , .minus").click(function () {
                    quantity = this.parentNode.querySelector('input[type=number]').value;
                    id = this.parentNode.querySelector('input[type=number]').attributes.cart_id.value;
                    //quantity = quantityInput.quantityInput.attributes.cart_id.value;
                    console.log(id);
                    console.log(quantity);
                    updatePrice(parseInt(id), parseInt(quantity));
                }
            );
        })</script>
@endsection


