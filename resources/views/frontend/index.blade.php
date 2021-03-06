@extends("layout.main")
@section("custom-library")
    <link rel="stylesheet" href="{{asset("css/css/index.css")}}">
    <link rel="stylesheet" href="{{asset("css/css/prism.css")}}">
    <link rel="stylesheet" href="{{asset("css/css/testi.css")}}">
    <link href="{{asset("css/css/animate.min.css")}}" rel="stylesheet" type="text/css">
    <script src="{{asset("js/masonry.pkgd.min.js")}}"></script>
    <script src="{{asset("js/jquery.flexslider-min.js")}}"></script>

    <script src="{{asset("js/main.js")}}"></script>
    <script src="{{asset("js/modernizr.js")}}"></script>
    <style>
        .reason-background, .optimal-background, .red-background, .ideas-background {
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .reason-background {
            background-image: url("{{asset("img/introduction/reason.jpg")}}");
            min-height: 300px;
        }

        .optimal-background {
            background-image: url("{{asset("img/introduction/camera-background.jpg")}}");
            min-height: 750px;
        }

        .red-background {
<<<<<<< HEAD
            background-image: url("https://i.pinimg.com/originals/aa/4a/16/aa4a16851449aa6155f36686013bbb81.png");
=======

            background-image: url("https://i.pinimg.com/originals/aa/4a/16/aa4a16851449aa6155f36686013bbb81.png");

>>>>>>> 931e557c71839e4506f1081ef41b752e517ca18a
            min-height: 500px;
        }

        .ideas-background {
            background-image: url("https://i.pinimg.com/originals/aa/4a/16/aa4a16851449aa6155f36686013bbb81.png");
            min-height: 500px;
        }


        .testimonialsRes {
            background: url("{{asset("img/introduction/shanghai.jpg")}}") center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            padding: 50px 0 70px;
            position: relative;
        }
    </style>
@endsection
@section("content")
    <div class="row-full position-relative slideMaxWidth">
        <div class="position-absolute location">
            <h1 class="px-2 pt-3 pb-2 pb-xl-3 m-0 animate__animated animate__flipInY brandFont fontSzBrand text-danger">
                MinhKhanh-Groups</h1>
            <ul class="list-unstyled ml-5">
                <li class="animate__animated animate__flipInX pb-2 pb-xl-3 firstItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                            class="fas fa-check pr-2 slideIcon"></i>AN TOA??N</h3>
                </li>
                <li class="pl-3 ml-3 animate__animated pb-2 pb-xl-3 animate__flipInX secondItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                            class="fas fa-check pr-2 slideIcon"></i>CH????T L??????NG</h3>
                </li>
                <li class="pl-5 ml-5 animate__animated animate__flipInX pb-2 pb-xl-3 thirdItemSlide">
                    <h3 class="fontSzSlideTitle fontSlideTitle m-0 font-weight-bold"><i
                            class="fas fa-check pr-2 slideIcon"></i>TI????N L????I</h3>
                </li>
                <li class="pl-5 ml-5">
                    <a href="http://localhost/minhkhanh/frontend/web/site/shop"
                       class="animate__animated animate__flipInY btnSlide btn btn-sm animated-button thar-three">Xem
                        th??m</a>
                </li>
            </ul>
        </div>
        <img src="{{asset("img/Sslide.jpg")}}" class="d-block w-100" alt="ads">
    </div>
    <!-- Offer-->
    <div class="container">
        <div class="row text-center mb-5">
            <h2 class="col-12 p-5 border-bottom border-darktext-center text-uppercase text-danger fontTitle">
                di??ch vu?? cu??a chu??ng t??i</h2>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-school iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">H??? th???ng tr?????ng h???c</h5>
                    <p> Gi??m s??t l???p h???c, k???p th???i ph??t hi???n s??? c???, qu???n l?? h???c sinh, gi??o vi??n. </p>
                    <a href="#" class="text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-hospital iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">H??? th???ng b???nh vi???n</h5>
                    <p>Nh???m qu???n l??, gi??m s??t, t???o l??ng tin cho b???nh nh??n khi ?????t ch??n ?????n ????y.</p>
                    <a href="#" class="text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-store-alt iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">H??? th???ng c???a h??ng</h5>
                    <p>Gi??p ch??? c???a h??ng d??? d??ng qu???n l?? kh??ch h??ng, nh??n vi??n tr???c ti???p ho???c t??? xa.</p>
                    <a href="#" class="text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-camera iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">Camera c??ng c???ng</h5>
                    <p>Thu???n ti???n l???p ?????t ??? c??ng vi??n, ???????ng ph??? v?? m???t s??? ?????a ??i???m c??ng c???ng kh??c. </p>
                    <a href="#" class="text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 sol-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-home iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">Camera h??? gia ????nh</h5>
                    <p>?????m b???o an ninh trong ch??nh c??n h??? c???a b???n, ?????m b???o an ninh gia ????nh</p>
                    <a href="#" class="text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 sol-md-6 col-lg-4 col-xl-4 p-3 row m-0 text-center text-lg-left offerCard">
                <div class="col-3 offerIcon">
                    <h1><i class="fas fa-building iIcon"></i></h1>
                </div>
                <div class="col-9">
                    <h5 class="font-weight-bold text-dark">H??? th???ng c??ng s???</h5>
                    <p>Qu???n l?? c??ng s???, chung c?? m???t c??ch bao qua??t, r?? r??ng, vi?? tri?? l????p ??????t ??a da??ng.</p>
                    <a href="#" class="text-decoration-none text-danger font-weight-bold">T??m hi???u th??m ></a>
                </div>
            </div>
        </div>
    </div>
    <!--    Reasons Why Should Choose Us?-->
    <div class="row reason-background row-full">
        <div
            class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 d-flex my-5 p-5 justify-content-center align-items-center">
            <h2 class="text-white bg-danger p-5 text-uppercase fontTitle text-center">
                T???i sao n??n ch???n<br> ch??ng t??i ?
            </h2>
        </div>
        <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-sm-5 row m-0 bg-light">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="far fa-clock iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">H??? tr??? 24/7</h5>
                    <p class="text-muted">Lu??n s????n sa??ng phu??c vu?? quy?? kha??ch 24/7 tr??? c??c ng??y L??? T???t</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-piggy-bank iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">Ti???t ki???m</h5>
                    <p class="text-muted">Ch??nh s??ch ??u ????i v?? khuy???n m???i c???c t???t cho m???i kh??ch
                        h??ng
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-user-friends iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">?????i ng?? nhi???t t??nh</h5>
                    <p class="text-muted">?????i ng?? nh??n vi??n chuy??n nghi???p, nhi???t t??nh.</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6 p-3 row text-center">
                <div class="col-12 col-sm-4 col-md-12 col-xl-4 mb-3 mb-xl-0">
                    <i class="fas fa-hammer iIcon p-3 reasonIcon"></i>
                </div>
                <div class="col-12 col-sm-8 col-md-12 col-xl-8">
                    <h5 class="font-weight-bold">B???o h??nh</h5>
                    <p class="text-muted">L???p ?????t t???n nh??, b???o h??nh t???n n??i, an to??n, uy t??n.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Point-->
    <div class="row-full red-background text-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 p-5">
                    <h2 class="border-bottom border-light py-sm-2 py-md-3 py-xl-4 fontTitle">M????T S???? ??I????M N????I
                        B????T</h2>
                    <p>Nh????ng con s???? ????n t??????ng ????????c ti??ch lu??y, duy tri?? t???? r????t nhi????u n??m c???? g????ng x??y d????ng,
                        pha??t
                        tri????n va?? co??n ti????p tu??c t??ng...</p>
                    <div class="buttonPoints">
                        <a href="#">
                            XEM&nbsp;TH??M&nbsp;
                            <span class="shift">???</span>
                        </a>
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 row py-5 px-5">
                    <div
                        class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-right borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='93'
                                               data-delay='1'
                                               data-increment="1">0</span><span>%</span></h1>
                        <p>Ng??????i du??ng ??a??nh gia?? cao</p>
                    </div>
                    <div
                        class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-bottom border-light border-left borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='25'
                                               data-delay='1'
                                               data-increment="1">0</span><span>th</span></h1>
                        <p id="infoPoint">N??m x??y d????ng va?? pha??t tri????n</p>
                    </div>
                    <div
                        class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-right border-light borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='20'
                                               data-delay='1'
                                               data-increment="1">0</span><span>+</span></h1>
                        <p id="infoPoint">??????i ta??c tr??n toa??n qu????c va?? n??????c ngoa??i</p>
                    </div>
                    <div
                        class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex align-items-center border-top border-left borderPoint">
                        <h1 class="mr-2"><span class='numscroller' data-slno='1' data-min='0' data-max='50'
                                               data-delay='1'
                                               data-increment="2">0</span><span>K+</span></h1>
                        <p id="infoPoint">Sa??n ph????m ????????c ph??n ph????i toa??n qu????c</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--best -->
    <div class="container">
        <div class="row p-5 m-0 text-center">
            <h2 class="text-danger text-center col-12 p-4 mb-5 text-uppercase border-bottom border-danger fontTitle">S???n
                ph???m n???i b???t</h2>
            <div class="row col-12 m-0 p-0">
                <div class="col-md-4">
                    <div class="card mb-2">
                        <img src="{{asset("img/introduction/products.png")}}" class="w-100">
                        <div class="card-body bg-light">
                            <h4 class="card-title">Camera</h4>
                            <p class="font-weight-bold ">
                                <i>H??? th???ng ch???ng tr???m (1)</i>
                            </p>
                            <a href="#" class="text-danger"><p>Tim hi???u th??m ></p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="card mb-2">
                        <img src="{{asset("img/introduction/products.png")}}" class="w-100">
                        <div class="card-body bg-light">
                            <h4 class="card-title">Camera</h4>
                            <p class="font-weight-bold ">
                                <i>H??? th???ng ch???ng tr???m (1)</i>
                            </p>
                            <a href="#" class="text-danger"><p>Tim hi???u th??m ></p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <div class="card mb-2">
                        <img src="{{asset("img/introduction/products.png")}}" class="w-100">
                        <div class="card-body bg-light">
                            <h4 class="card-title">Camera</h4>
                            <p class="font-weight-bold ">
                                <i>H??? th???ng ch???ng tr???m (1)</i>
                            </p>
                            <a href="#" class="text-danger"><p>Tim hi???u th??m ></p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 m-0 p-0"></div>
            <div class="col-4 m-0 p-0">
                <a href="/site/shop" class="animated-button thar-two">Xem th??m</a>
            </div>
            <div class="col-4 m-0 p-0"></div>
        </div>
    </div>
    <!--Optimal -->
    <div class="row p-5 optimal-background row-full" id="optimal">
        <h2 class="col-12 text-center text-light border-light border-bottom py-3 fontTitle text-uppercase"
            id="titleOptimal">T???i ??u s???n ph???m</h2>
        <div class="col-12 row position-relative">
            <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
                <div class="main1">
                    <div class="text-center">
                        <i class="fas fa-tachometer-alt fa-2x"></i><br>
                        <h2>T????C ??????</h2>
                    </div>
                </div>
                <div class="main2"></div>
                <div class="main3"></div>
            </div>
            <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
                <div class="main1">
                    <div class="text-center">
                        <i class="fas fa-lock fa-2x"></i><br>
                        <h2>BA??O M????T</h2>
                    </div>
                </div>
                <div class="main2"></div>
                <div class="main3"></div>
            </div>
            <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
                <div class="main1">
                    <div class="text-center">
                        <i class="fas fa-check fa-2x"></i><br>
                        <h2>CH????T L??????NG</h2>
                    </div>
                </div>
                <div class="main2"></div>
                <div class="main3"></div>
            </div>
            <div class="h-25 col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 my-5 my-lg-0 py-5 py-lg-0 main">
                <div class="main1">
                    <div class="text-center">
                        <i class="fas fa-photo-video fa-2x"></i><br>
                        <h2>HI??NH A??NH</h2>
                    </div>
                </div>
                <div class="main2"></div>
                <div class="main3"></div>
            </div>
        </div>
        <h2 class="d-none d-lg-block col-12 text-center text-light text-uppercase mt-3" id="moreOptimal">B???n mu???n bi???t
            th??m?
            Th???t d???
            d??ng!<br>G???i cho ch??ng t??i: <a href="#">(+84)123456789</a></h2>
    </div>
    <!--Hear from our clients-->
    <div class="container text-center mb-5">
        <h2 class="text-danger text-uppercase mb-5 fontTitle p-5 border-bottom border-danger">
            pha??n h????i cu??a kha??ch ha??ng
        </h2>
        <section class="testimonialsRes">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <!-- Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>

                            <div class="carousel-inner">
                                <!-- Item-1 -->
                                <div class="carousel-item active text-center">
                                    <img src="{{asset("img/introduction/avatar-1.jpg")}}" alt=""
                                         class="center-block team">
                                    <h3>Alamin Musa</h3>
                                    <h4>BackEnd Developer</h4>
                                    <p>"T????c ?????? ????n ??i??nh du?? ??ang ???? ca??ch xa nha??, hi??nh a??nh ro?? ra??ng. Ma??nh da??n
                                        la??
                                        kha??ch c????ng cu??a shop..."</p>
                                </div>
                                <!-- Item-2 -->
                                <div class="carousel-item text-center">
                                    <img src="{{asset("img/introduction/avatar-2.jpg")}}" alt=""
                                         class="center-block team">
                                    <h3>Charlote Kartlyn</h3>
                                    <h4>FrontEnd Developer</h4>
                                    <p>"??m thanh va?? hi??nh a??nh thi??ch th????c s????! T??i c???? ng???? la?? ??ang xem phim
                                        v????y..."</p>
                                </div>
                                <!-- Item-3 -->
                                <div class="carousel-item text-center">
                                    <img src="{{asset("img/introduction/avatar-3.jpg")}}" alt=""
                                         class="center-block team">
                                    <h3>William Karma</h3>
                                    <h4>CEO</h4>
                                    <p>"Thang ma??y cu??a shop l????p cho c??ng cu??a ty t??i ????????c g????n 10 n??m ma?? t??i ch??a
                                        c????n
                                        thu?? nh??n vi??n s????a ch????a ho??ng ho??c l????n na??o. ??a??ng ??????ng ti????n th????c
                                        s????."</p>
                                </div>

                            </div>
                            <a class="carousel-control-prev control"
                               data-target="#carouselExampleIndicators"
                               role="button"
                               data-slide="prev">
                                <i class="fas fa-angle-left iconRes"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next control"
                               data-target="#carouselExampleIndicators"
                               role="button"
                               data-slide="next">
                                <i class="fas fa-angle-right iconRes"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a href="#0" id="hide" class="cd-see-all animated-button thar-two">Xem t????t ca??</a>
        <div class="cd-testimonials-all" id="feedBack">
            <div class="cd-testimonials-all-wrapper">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="cd-testimonials-item text-center">
                        <h1>~ <i>PHA??N H????I CU??A KHA??CH HA??NG</i> ~</h1>
                    </li>
                    <li class="cd-testimonials-item">
                        <p>"T????c ?????? ????n ??i??nh du?? ??ang ???? ca??ch xa nha??, hi??nh a??nh ro?? ra??ng. Ma??nh da??n la?? kha??ch
                            c????ng
                            cu??a shop..."</p>

                        <div class="cd-author">
                            <img src="{{asset("img/introduction/avatar-2.jpg")}}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Alamin Musa</li>
                                <li>BackEnd Developer</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>"??m thanh va?? hi??nh a??nh thi??ch th????c s????! T??i c???? ng???? la?? ??ang xem phim v????y..."</p>

                        <div class="cd-author">
                            <img src="{{asset("img/introduction/avatar-3.jpg")}}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Charlote Kartlyn</li>
                                <li>FrontEnd Developer</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>"Thang ma??y cu??a shop l????p cho c??ng cu??a ty t??i ????????c g????n 10 n??m ma?? t??i ch??a c????n thu?? nh??n
                            vi??n s????a ch????a ho??ng ho??c l????n na??o. ??a??ng ??????ng ti????n th????c s????."</p>

                        <div class="cd-author">
                            <img src="{{asset("img/introduction/avatar-4.jpg")}}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>William Karma</li>
                                <li>CEO</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>"Am thanh rat ro rang. Toi rat la thich shop..."</p>

                        <div class="cd-author">
                            <img src="{{asset("img/introduction/avatar-5.jpg")}}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Cleopatra</li>
                                <li>Ba??c Si??</li>
                            </ul>
                        </div>
                    </li>

                    <li class="cd-testimonials-item">
                        <p>"It's my pleasure to use the product of shop..."</p>

                        <div class="cd-author">
                            <img src="{{"img/introduction/avatar-6.jpg"}}" alt="Author image">
                            <ul class="cd-author-info">
                                <li>Jhin</li>
                                <li>V????n ??????ng vi??n b????n su??ng</li>
                            </ul>
                        </div>
                    </li>

                    <li class="text-center cd-testimonials-item text-uppercase">
                        <blockquote><i>~ End ~</i></blockquote>
                    </li>
                </ul>

            </div>
            <a href="#0" class="close-btn" id="show">Close</a>
        </div> <!-- cd-testimonials-all -->
    </div>
    <!--    Have any ideas in your mind?-->
    <div class="p-5 ideas-background row-full text-white main">
        <div class="container p-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 text-center text-md-left">
                    <h1 id="idea"><b><i>BA??N CO?? Y?? T??????NG ???</i></b></h1>
                    <h4 class="font-weight-lighter">LI??N H???? NGAY V????I CHU??NG T??I...</h4>
                </div>
                <div class="col-12 col-sm-12 col-lg-4 col-md-4 d-flex align-items-center justify-content-center">
                    <div class="buttonPoints">
                        <a href="{{route("contact")}}">
                            LI??N H???? NGAY
                            <span class="shift">???</span>
                        </a>
                        <div class="mask"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Companies We Have as Clients-->
    <div class="container">
        <div class="row m-0 text-muted">
            <h2 class="text-danger text-center col-12 p-5 font-weight-bold fontTitle border-bottom border-danger">??????I
                TA??C
                CU??A
                CHU??NG T??I</h2>
            <div id="brand" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3 active">
                                <img src="{{asset("img/brand/sony.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset("img/brand/hitachi.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class=" col-md-3">
                                <img src="{{asset("img/brand/lg.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class=" col-md-3">
                                <img src="{{asset("/img/brand/fpt.png")}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class=" col-md-3">
                                <img src="{{asset("img/brand/hikvision.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class=" col-md-3">
                                <img src="{{asset("img/brand/samtech.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class=" col-md-3">
                                <img src="{{asset("img/brand/imou.png")}}" class="d-block w-100" alt="...">
                            </div>
                            <div class=" col-md-3">
                                <img src="{{asset("img/brand/logitech.png")}}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#brand" data-slide="prev">
                    <i class="fas fa-angle-left fa-2x text-danger"></i>
                </a>
                <a class="carousel-control-next" href="#brand" data-slide="next">
                    <i class="fas fa-angle-right fa-2x text-danger"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="pb-5"></div>
@endsection
@section("loaded")

    <script type="text/javascript" src="{{asset("js/prism.js")}}"></script>
    <script type="text/javascript" src="{{asset("js/numscroller-1.0.js")}}"></script>
    <script>
        $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
            $(e.target)
                .prev()
                .find("i:last-child")
                .toggleClass("fa-minus fa-plus");
        });
        $(document).ready(function () {
            $("#hide").click(function () {
                $("#nav").hide();
            });
            $("#show").click(function () {
                $("#nav").show();
            });
        });
    </script>
@endsection
