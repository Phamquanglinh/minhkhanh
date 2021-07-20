<html>
<head>
    <title>{{isset($title)?$title:'Minh Khánh Group'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">

    <link href="{{asset("css/css/site.css")}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}"/>
    <link rel="icon" type="image/x-icon" href="{{asset("favicon.ico")}}"/>
    <script type="text/javascript" src="{{asset("js/popper.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js">
        <script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/bootstrap.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/notify.min.js")}}"></script>
    {{--    <link href="{{asset("css/fontawesome/CSS/all.css")}}" rel="stylesheet" type="text/css">--}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{asset("css/css/style.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/css/site.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("css/css/navbar.css")}}" rel="stylesheet" type="text/css">
    <style>
        .cart {
            position: fixed;
            top: 25%;
            right: 2%;
            background: red;
            padding: 23px;
            border-radius: 50%;
            color: white;
            z-index: 9999;
            cursor: pointer;
            opacity: 0.6;
        }

        .cart:hover {
            opacity: 1;
            transform: scale(1.2);
            transition: 0.5s;
        }
    </style>
    @yield("custom-library")
</head>
<body>
<header>
    <div class="container-fluid bg-danger">
        <div class="container text-white">
            <div class="row">
                <div
                    class="col-12 col-sm-12 col-md-3 col-lg-3 px-0 bg-warning text-center font-weight-bold py-2 py-sm-2 py-md-3 py-lg-3 py-xl-2">
                    <i class="far fa-clock"></i> Wednesday, 14 July 2021
                </div>
                <div
                    class="col-12 col-sm-12 col-md-5 col-lg-5 px-0 text-center font-weight-bold py-2 py-sm-2 py-md-3 py-lg-3 py-xl-2">
                    <div class="typewriter-text">Welcome to Minh Khanh's website!</div>
                </div>
                <div
                    class="col-12 col-sm-12 col-md-4 col-lg-4 px-0 pl-md-3 text-center text-lg-left py-2 font-weight-bold">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-5 px-0">
                            <a class="text-white" href="tel:0908-090-503"><i class="fas fa-headset"></i>
                                0908.090.503</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-7 px-0">
                            <a class="text-white" href="mailto:minhkhanh@gmail.com"><i class="fas fa-envelope"></i>
                                minhkhanh@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-3">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 px-0 text-center d-none d-sm-none d-md-block">
                <a class="navbar-brand pt-0" href="{{route("index")}}" target="_blank"
                   title="Trang chủ Minh Khánh Group">
                    <img class="img-fluid img-responsive" src="{{asset("img/logo200.png")}}" alt="Minh Khánh">
                </a>
            </div>
            <div class="col-12 col-sm-12 col-md-9 col-lg-9 px-0 text-center pl-3 pl-sm-0">
                <a class="navbar-brand" href="{{route("index")}}" target="_blank"
                   title="Trang chủ Minh Khánh Groups">
                    <img class="img-fluid img-responsive" src="{{asset("img/khuyenmai.jpg")}}"
                         alt="Minh Khánh khuyến mại">
                </a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-md navbar-dark bgNavBar sticky-top py-1" id="nav">
    <div class="container font-weight-bold">
        <a href="{{route("index")}}" class="navbar-brand d-md-none"><img
                src="{{asset("img/logoMinhKhanhRespon.png")}}" height="48px" width="auto"
                alt="Minh Khanh"></a>
        <button class="navbar-toggler ml-auto text-light border-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i> MENU
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-white">
                <!-- Home -->
                <li class="nav-item borderX px-md-1 mr-xl-0">
                    <a class="nav-link text-light" href="{{route("index")}}"><i
                            class="fas fa-home"><span class="d-md-none"> TRANG CHỦ</span></i></a>

                </li>
                <!-- Product -->
                <li class="nav-item dropdown border-md-right">
                    <a class="nav-link dropdown-toggle text-light d-lg-none"
                       id="categoryDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i> Sản phẩm
                    </a>
                    <a class="nav-link dropdown-toggle text-light d-none d-lg-block pr-lg-3" id="categoryDropdown"
                       role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars px-md-2"></i> Danh mục sản phẩm
                    </a>
                    <ul class="dropdown-menu shadow-lg" aria-labelledby="categoryDropdown">
                        <!-- Camera -->
                        <li class="dropdown-item"><a class="nav-link text-dark"><i
                                    class="fas fa-camera"></i> Camera <i
                                    class="fas fa-caret-right float-right px-3"></i></a>
                            <ul class="submenu dropdown-menu shadow-lg">
                                @php($cameras = \App\Models\Category::where('type','=',0)->get())
                                @foreach($cameras as $camera)
                                    <li><a class="dropdown-item"
                                           href="{{route("category",['name'=>$camera->slug])}}">{{$camera->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <!-- Elevator -->
                        <li class="dropdown-item"><a class="nav-link text-dark"><i
                                    class="fas fa-hotel"></i> Thang máy <i
                                    class="fas fa-caret-right float-right px-3"></i></a>
                            <ul class="submenu dropdown-menu shadow-lg">
                                @php($cameras = \App\Models\Category::where('type','=',1)->get())
                                @foreach($cameras as $camera)
                                    <li><a class="dropdown-item"
                                           href="{{route("category",['name'=>$camera->slug])}}">{{$camera->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav text-white ml-auto">
                <!--About-->
                <li class="nav-item dropdown m-0 pr-lg-2 pr-xl-5">
                    <a class="nav-link dropdown-toggle text-light" href="#"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-compass d-md-none d-lg-inline-block"></i> Giới thiệu
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                Dự án
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Quy chuẩn
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Sơ đồ tổ chức
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Lịch sử phát triển
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Tầm nhìn-Sứ mệnh-Giá trị cốt lõi
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Video, hình ảnh
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Services-->
                <li class="nav-item dropdown m-0 pr-lg-2 pr-xl-5">
                    <a class="nav-link dropdown-toggle text-light" href="#"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-compass d-md-none d-lg-inline-block"></i> Dịch vụ
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                Bảo dưỡng
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Vật tư, thiết bị
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Giải pháp thiết kế
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Dịch vụ nâng cấp
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Tra cứu bảo hành, bảo dưỡng
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Tuyển dụng
                            </a>
                        </li>
                    </ul>
                </li>
                <!--Document-->
                <li class="nav-item dropdown m-0 pr-lg-2 pr-xl-5">
                    <a class="nav-link dropdown-toggle text-light" href="#"
                       role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-compass d-md-none d-lg-inline-block"></i> Tài liệu
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="nav-link text-dark"
                               href="http://localhost/minhkhanh/frontend/web/tool/download">
                                <i class="fas fa-cloud-download-alt"></i> Tải về tài liệu
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-globe-asia"></i> Hướng dẫn sử dụng(GG Diver)
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Support -->
                <li class="nav-item dropdown m-0 pr-lg-2 pr-xl-5">
                    <a class="nav-link dropdown-toggle text-light"
                       role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-compass d-md-none d-lg-inline-block"></i> Hỗ trợ
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-cogs"></i> Chính sách bảo hành
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="#">
                                <i class="fas fa-cogs"></i> Đổi trả hàng
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark"
                               href="{{route("recommend")}}">
                                <i class="fas fa-cogs"></i> Khuyến cáo
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark" href="{{route("faq")}}">
                                <i class="fas fa-cogs"></i> Câu hỏi thường gặp
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="nav-link text-dark"
                               href="{{route("contact")}}">
                                <i class="fas fa-globe-asia"></i> Liên hệ
                            </a>
                        </li>
                    </ul>
                </li>
                @if(backpack_auth()->check())
                    <li class="nav-item dropdown m-0">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown " role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-user"></i> {{backpack_user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            @if(backpack_user()->role <= 1)
                                <li class="dropdown-item">
                                    <a class="nav-link text-dark"
                                       href="{{route("backpack.account.info")}}">
                                        <i class="fas fa-user"></i> Hồ sơ admin
                                    </a>
                                </li>
                                <li class="dropdown-item">
                                    <a class="nav-link text-dark"
                                       href="{{route("backpack.dashboard")}}">
                                        <i class="fas fa-tachometer-alt"></i> Quản trị
                                    </a>
                                </li>
                            @else
                                <li class="dropdown-item">
                                    <a class="nav-link text-dark"
                                       href="{{route("profile.index")}}">
                                        <i class="fas fa-tachometer-alt"></i> Thông tin của bạn
                                    </a>
                                </li>
                            @endif
                            <li class="dropdown-item">
                                <a class="nav-link text-dark"
                                   href="{{route("backpack.auth.logout")}}">
                                    <i class="fas fa-sign-out-alt"></i> Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown m-0">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="userDropdown " role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-sign-in"></i> Tài khoản
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a class="nav-link text-dark"
                                   href="{{route("backpack.auth.login")}}">
                                    <i class="fas fa-user"></i> Đăng nhập
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a class="nav-link text-dark"
                                   href="{{route("backpack.auth.register")}}">
                                    <i class="fas fa-registered"></i> Đăng ký
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div> <!-- navbar-collapse.// -->
</nav>
<div class="wrap">
    @yield("content")
</div>
<footer class="footer bg-danger row-full">
    @if(backpack_auth()->check())
        <a href="{{route("cart")}}">
            <div class="cart h2">
                <i class="fas fa-cart-plus"></i>
            </div>
        </a>
    @endif
    <section class="kh-footer">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Minh Khánh Groups</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Trụ sở: Số 1 đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1
                            đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:minhkhanh@gmail.com">minhkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="{{route("index")}}">www.minhkhanhgroups.com</a>
                            - <a class="text-white" href="{{route("index")}}">www.minhkhanhgroups.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                    <div class="social-others">
                        <a class="pr-1" href="https://www.facebook.com/nhaantoan/" target="_blank"
                           rel="noopener noreferrer">
                            <i class="fab fa-facebook-square fa-2x text-white"></i>
                        </a>
                        <a href="https://www.facebook.com/nhaantoan/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-youtube-square fa-2x text-white"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Chi nhánh miền Nam</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1
                            đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:minhkhanh@gmail.com">minhkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="{{route("index")}}">www.minhkhanhgroups.com</a>
                            - <a class="text-white" href="{{route("index")}}">www.minhkhanhgroups.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <h3 class="pb-4">Chi nhánh miền Trung</h3>
                    <address>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i> Văn phòng: Số 1
                            đường
                            Khương
                            Đình, Kim Giang, Hà Nội</p>
                        <p class="effect"><i class="fa fa-phone-alt my-border-radius"></i> <a class="text-white"
                                                                                              href="tel:0916354248">0916354248</a>
                        </p>
                        <p class="effect"><i class="fa fa-envelope my-border-radius"></i> <a class="text-white"
                                                                                             href="mailto:minhkhanh@gmail.com">minhkhanh@gmail.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-globe-asia my-border-radius"></i> <a class="text-white"
                                                                                               href="{{route("index")}}">www.minhkhanhgroups.com</a>
                            - <a class="text-white" href="{{route("index")}}">www.minhkhanhgroups.com</a>
                        </p>
                        <p class="effect"><i class="fa fa-barcode my-border-radius"></i> MST: 01010xxxx</p>
                        <p class="effect"><i class="fa fa-map-marker-alt my-border-radius"></i>
                            <a class="text-white"
                               href="https://www.google.com/maps/place/Kim+Giang,+Thanh+Xu%C3%A2n,+Hanoi,+Vietnam/@20.9823843,105.8095188,16z/data=!3m1!4b1!4m5!3m4!1s0x3135acec14cdcfb9:0xb4f53c8207b23974!8m2!3d20.9828413!4d105.8121513">Bản
                                đồ đường đi</a>
                        </p>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <section class="kh-copyright">
    </section>
    <div class="fix-footer bg-danger d-none d-sm-none d-md-block" id="taskbar">
        <div class="container text-white">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="http://hikvision.vn/danh-cho-dai-ly/dang-ky-dai-ly" target="_blank"
                       class="text-white font-weight-bold">
                        <i class="fa fa-pencil-alt text-white"></i> Đăng ký đại lý
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="tel:0916354248" class="text-white font-weight-bold">
                        <i class="fa fa-phone-alt text-white"></i> 0916 354 248
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="http://hikvision.vn/danh-cho-dai-ly/dang-ky-dai-ly" target="_blank"
                       class="text-white font-weight-bold">
                        <i class="fab fa-facebook text-white"></i> FB Minh Khánh
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
@yield("loaded")
</body>
</html>
