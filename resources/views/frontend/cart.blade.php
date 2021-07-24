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
        @if (session('reported'))
            <div class="alert alert-success">
                {{ session('reported') }}
            </div>
        @endif
        @if($carts->where('order_id','=',null)->count() > 0 )
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
            <div class="container text-center">
                <div class="text-danger pt-4">
                    <img src="https://i.pinimg.com/originals/85/2f/49/852f494d72637092dcef5e11afeabd58.gif">
                   <div class="h5"> Giỏ hàng trống , hãy quay lại tìm kiếm sản phẩm !</div>
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
            <div id="accordion">
                @foreach($historyOrders as $index => $order)
                    <div class="card">
                        <div class="" id="heading{{$index}}">
                            <h5 class="mb-0">
                                <button class="w-100 btn bg-danger p-2 text-white d-flex justify-content-between"
                                        data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true"
                                        aria-controls="collapse{{$index}}">
                                    Mã đơn hàng :#{{$order->code}}
                                    <i class="fas fa-info-circle"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{$index}}" class="collapse {{$index==0?"show":""}}"
                             aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        @php
                                            $hisCarts = $order->carts()->get();
                                        @endphp
                                        @foreach($hisCarts as $cart)
                                            <div class="font-weight-bold">{{$cart->getProduct()->first()->name}}
                                                x {{$cart->quantity}}</div>
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6 col-12">
                                                    <img src="{{$cart->getProduct()->first()->getThumbnail()}}"
                                                         class="w-100">
                                                </div>
                                                <div class="text-danger col-md-9 col-sm-6 col-12">
                                                    <div>{{number_format($cart->getProduct()->first()->price)}} đ</div>
                                                    <div>Danh mục</div>
                                                    <div>
                                                        <a href="{{route("category",$cart->getProduct()->first()->category()->first()->slug)}}">
                                                            {{$cart->getProduct()->first()->category()->first()->name}}
                                                        </a></div>
                                                </div>
                                            </div>
                                            @foreach($cart->getProduct()->first()->tags()->get() as $tag)
                                                <span class="badge badge-danger">{{$tag->name}}</span>
                                            @endforeach
                                            <hr>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="bg-light">
                                            <div>Ngày đặt : {{$order->created_at}}</div>
                                            <div>Địa chỉ giao hàng : {{$order->address}}</div>
                                            <div>Số điện thoại : {{$order->phone}}</div>
                                            <div>Lời nhắn : {{$order->note}}</div>
                                            <div class="py-2">
                                                @switch($order->status)
                                                    @case(0)
                                                    <div class="badge badge-primary">Chưa giao hàng</div>
                                                    @break
                                                    @case(1)
                                                    <div class="badge badge-info">Đang giao hàng</div>
                                                    @break
                                                    @case(2)
                                                    <div class="badge badge-success">Đã giao hàng</div>
                                                    @break
                                                    @case(3)
                                                    <div class="badge badge-danger">Đã hủy</div>
                                                    @break
                                                    @case(4)
                                                    <div class="badge badge-secondary">Đã hoàn trả</div>
                                                    @break
                                                @endswitch
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="bg-light">
                                            @if($order->status >= 2)
                                            <button type="button" class="response btn btn-secondary w-100 my-1"
                                                    data-toggle="modal"
                                                    value="{{$order->code}}" data-target="#report">
                                                <i class="fas fa-warning"></i>Phản hồi đánh giá
                                            </button>
                                            @endif
                                            @if($order->status == 2)
                                                <button type="button" class="refund btn btn-danger w-100 my-1"
                                                        data-toggle="modal"
                                                        value="{{$order->code}}" data-target="#refund">
                                                    <i class="fas fa-warning"></i>Yêu cầu đổi trả hàng
                                                </button>
                                            @endif
                                            @if($order->status == 0)
                                                <button type="button" class="btn btn-danger w-100 my-1">
                                                    <i class="fas fa-close"></i>Hủy đơn hàng
                                                </button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{--            MODEL REPORT--}}
            <div class="modal fade" id="report" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Phản hồi sản phẩm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route("order.report")}}" method="post">
                            @csrf
                            <input name="name" value="{{backpack_user()->name}}" hidden>
                            <input name="email" value="{{backpack_user()->email}}" hidden>
                            <input name="phone" value="{{isset($customer)?$customer->phone:""}}" hidden>
                            <input name="topic" id ="report-topic" value="" hidden>
                            <div class="modal-body">
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="contents" id="content-rp"
                                              placeholder="Phản hồi của bạn"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Gửi phản hồi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--            END REPORT--}}
            {{--            MODEL REFUND--}}
            <div class="modal fade" id="refund" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Yêu cầu đổi trả hàng</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{route("order.refund")}}" method="post">
                            @csrf
                            <div class="modal-body">
                                <input name="name" value="{{backpack_user()->name}}" hidden>
                                <input name="email" value="{{backpack_user()->email}}" hidden>
                                <input name="phone" value="{{isset($customer)?$customer->phone:""}}" hidden>
                                <input name="topic" id="refund-topic"value="Yêu cầu đổi trả #ASAJ" hidden>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" name="contents" id="content-rp"
                                              placeholder="Lý do hoàn trả"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--            END REFUND--}}
        </div>
    </div>
@endsection
@section("loaded")
    <script>
        $(document).ready(function () {
            $(".cart").hide();

            $(".response").click(function (){
               var  sdata = $(this).val();
               $("#report-topic").val(sdata);

            });
            $(".refund").click(function (){
                var  sdata = $(this).val();
                $("#refund-topic").val(sdata);

            });

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
                    url: "{{ env("app_url")."/cart.html" }}",
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


