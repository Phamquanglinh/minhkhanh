@php
    $title = $product->name;
@endphp
@extends("layout.main")
@section("custom-library")
    <style>
        @media only screen and (max-width: 768px) {
            .detail img {
                width: 100% !important;
                height: auto !important;
            }
        }

        .detail {
            overflow: hidden;
        }

        .gallery .col-3 img {
            opacity: 0.7;
        }

        .gallery .col-3 img:hover {
            transition: 0.5s;
            transform: rotate(25deg);
            cursor: pointer;
            opacity: 1;
            border-radius: 100%;
            overflow: hidden;
        }

        .quantity {
            width: 45px !important;
            flex: none !important;
        }
    </style>
@endsection
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="p-2 bg-light">
                    <img src="{{env("APP_URL")."/".$product->avatars[0]}}" id="big-img" class="w-100">
                    <div class="row gallery pt-4">
                        @foreach($product->avatars as $avatar)
                            <div class="col-3 p-1 mini-img">
                                <img src="{{env("APP_URL")."/".$avatar}}" class="w-100">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 p-2 bg-light">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("index")}}">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a
                            href="{{route("category",$product->category()->first()->slug)}}">{{$product->category()->first()->name}}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                </ol>
                <div class="p-2 details-control">
                    <div class="font-weight-bold pb-2 h3">
                        {{$product->name}}
                    </div>
                    <div class="text-danger h2">
                        {{number_format($product->price)." đ"}}
                    </div>
                    <div class="text-muted">
                        {{number_format($product->origin_price)." đ"}}
                    </div>
                    <div class="bg-white pt-2 font-italic">
                        {{$product->short}}
                    </div>
                    <div class="font-weight-bold pt-2">
                        Danh mục:
                        <a href="{{route("category",$product->category()->first()->slug)}}">{{$product->category()->first()->name}}</a>
                    </div>
                    <div class="font-weight-bold pt-2">
                        Nhà phân phối:
                        <a href="#">{{$product->category()->first()->trades()->first()->name}}</a>
                    </div>
                </div>
                <div class="buy p-3 ">
                    <div class="quantity-group">
                        <div class="h3">Lựa chọn số lượng</div>
                        <div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn rounded-0 btn-outline-danger" type="button" id="minus">-</button>
                                </div>
                                <input type="text" class="form-control quantity" value="1" id="quantity"
                                       aria-describedby="button-addon1" readonly>
                                <div class="input-group-prepend">
                                    <button class="btn rounded-0 btn-outline-danger" type="button" id="plus">+</button>
                                </div>
                            </div>
                        </div>
                        <div class="add-card">
                            <div class="row">
                                @if(backpack_auth()->check())
                                    <div class="col-md-6 col-12 py-1 p-1">
                                        <div class=" w-100 btn btn-outline-warning" id="ajax-add-cart">Thêm vào giỏ hàng
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 py-1 p-1">
                                        <div class="w-100 btn btn-outline-danger" id="ajax-buy-now">Mua ngay</div>
                                    </div>
                                @else
                                    <div class="col-md-6 col-12 py-1 p-1">
                                        <a href="{{route("backpack.auth.login")}}">
                                            <div class=" w-100 btn btn-outline-warning" id="ajax-add-cart">Thêm vào giỏ
                                                hàng
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-12 py-1 p-1">
                                        <a href="{{route("backpack.auth.login")}}">
                                            <div class="w-100 btn btn-outline-danger" id="ajax-buy-now">Mua ngay</div>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-3 px-3">
                    <div class="h5"><i class="fas fa-tags"></i> Nhãn</div>
                    @php($tags = $product->tags()->get())
                    @foreach($tags  as $tag)
                        <div class="badge badge-danger p-2">{{$tag->name}}</div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="py-5 detail">
            <div class="text-center pb-5">
                <button class="btn btn-outline-danger" type="button" data-toggle="collapse"
                        data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Xem thêm thông tin
                </button>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    {!! $product->description !!}
                </div>
            </div>
        </div>
        @endsection
        @section("loaded")
            <script>
                $('.mini-img img').click(function () {
                    $("#big-img").attr("src", this.src);
                })
                $("#plus").click(
                    function () {
                        var couter = parseInt($("#quantity").val());
                        couter++;
                        $("#quantity").val(couter);
                    }
                );
                $("#minus").click(
                    function () {
                        var couter = parseInt($("#quantity").val());
                        if (couter > 1) {
                            couter--;
                        }
                        $("#quantity").val(couter);
                    }
                );

                function addCart(product_id, quantity, ref = false) {
                    console.log(product_id);
                    console.log(quantity);
                    $.ajax({
                        type: 'POST',
                        url: "{{env("app_url")."/cart-add.html"}}",
                        data: {"_token": "{{csrf_token()}}", "product_id": product_id, "quantity": quantity},
                    });
                    if (ref) {
                        location.href = "{{env("app_url")."/cart.html"}}";
                    }
                }

                $("#ajax-add-cart").click(function () {
                    var product_id = {{$product->id}}
                        var
                    quantity = $('#quantity').val();
                    addCart(product_id, quantity);

                    $(".cart").notify(
                        "Thêm sản phẩm thành công",
                        {
                            position: "left",
                            className: 'a btn btn-success px-5 bg-danger',
                            arrowSize: 5,
                            showDuration: 200,
                            autoHideDelay: 2000,
                            hideDuration: 200,
                        }
                    );
                });

                $("#ajax-buy-now").click(function () {
                    var product_id = {{$product->id}}
                        var
                    quantity = $('#quantity').val();
                    addCart(product_id, quantity, true);
                });
            </script>
@endsection
