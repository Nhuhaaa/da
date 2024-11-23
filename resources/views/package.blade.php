@extends('layout')
@section('titlepage', ' Package')
@section('content')


<!-- Begin:: Banner Section -->
<section class="page_banner">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1">
                <h2 class="banner-title">Bản giá</h2>
                <p class="breadcrumbs"><a href="{{ route('home') }}">Home</a><span>/</span>Bản giá</p>
            </div>

        </div>
    </div>
</section>

<!-- Begin:: Package Section -->
<section class="commonSection packagegPage">
    <div class="layer_img l_03 move_anim">
        <img src="makeover/images/bg/14.png" alt="" />
    </div>
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="sectionTitle text-center">
                <img src="makeover/images/icons/2.png" alt="">
                <h5 class="primaryFont">Welcome</h5>
                <h2>Các dịch vụ của <span class="colorPrimary fontWeight400">Lalisa</span></h2>
                <p>

                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3>Tất cả dịch vụ</h3>
                @foreach ($serviceOld as $item)
                    <div class="package_item pl_area">
                        <img src="{{ asset('upload/' . $item->image) }}" alt="" />
                        <h5>
                            <a href="javascript:void(0);">{{ $item->service_name }}</a>
                            <span class="piborder"></span>
                            <span>Chỉ từ</span>
                            {{ number_format($item->price, 0, ',', '.') }} VNĐ
                        </h5>
                        <p></p>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
            <h3>Dịch vụ mới nhất</h3>
                @foreach ($serviceNew as $item)
                    <div class="package_item pl_area">
                        <img src="{{ asset('upload/' . $item->image) }}" alt="" />
                        <h5>
                            <a href="javascript:void(0);">{{ $item->service_name }}</a>
                            <span class="piborder"></span>
                            <span>Chỉ từ</span>
                            {{ number_format($item->price, 0, ',', '.') }} VNĐ
                        </h5>
                        <p></p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
<!-- End:: Package Section -->

<!-- Begin:: Pricing Section -->
<section class="commonSection pricingSection3">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sectionTitle text-center">
                    <img src="makeover/images/icons/2.png" alt="">
                    <h5 class="primaryFont">Welcome</h5>
                    <h2>Gói dịch vụ của<span class="colorPrimary fontWeight400"> Lalisa</span></h2>
                    <p>
                        Những gói dịch vụ, gồm nhiều bước làm bạn thoải mái, xinh đẹp hơn, tơi mới hơn sau những ngày
                        làm việc học tập vất vả. Hãy đến với chúng tôi, chúng tôi luôn tận tình châm sóc bạn.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
    @foreach ($allPackages as $item)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-4">
            <div class="product_item w-100">
                <div class="pricingTable text-center">
                    <h3>{{ $item->package_name }}</h3>
                    <div class="pt_price">{{ number_format($item->price, 0, ',', '.') }}<i>VND</i>/ <span>lần</span></div>
                    <ul>
                        <li>{{ $item->service->service_name ?? 'Không có dịch vụ' }}</li>
                        <li>{{ $item->description }}</li>
                    </ul>
                    <a href="" class="mo_btn"><i class="icofont-calendar"></i>Đặt ngay</a>
                </div>
            </div>
        </div>
    @endforeach
</div>


        <br>
        <!-- <div class="row d-flex justify-content-center">
            <a href="" class="mo_btn"><i class="fas fa-boxes me-2"></i>Xem toàn bộ gói dịch vụ</a>
        </div> -->

    </div>
</section>

<!-- <section class="packageSection">
    <div class="theSidebar">
        <div class="theiaStickySidebar">
            <nav class="ScrollSpyNav">
                <ul>
                    <li>
                        <a href="#spa_solution">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                       -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                       1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z" />
                                </g>
                            </svg>
                            <div class="SSNContent">
                                <i class="mkov-candle"></i>
                                <span>SPA Solution</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#massage">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1572 2919 c-708 -80 -1193 -291 -1416 -614 -534 -777 474 -2293
                                       1524 -2292 887 1 1576 436 1644 1037 101 889 -356 1757 -949 1804 -69 5 -160
                                       22 -202 38 -98 37 -396 51 -601 27z" />
                                </g>
                            </svg>
                            <div class="SSNContent">
                                <i class="mkov-massage"></i>
                                <span>Massage</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#facials">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="175.000000pt"
                                height="152.000000pt" viewBox="0 0 175.000000 152.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,152.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1115 2973 c-533 -182 -1118 -1037 -1091 -1597 31 -647 948 -1379
                                       1694 -1351 1127 43 2049 1058 1675 1845 -197 414 -1177 1090 -1581 1090 -27 0
                                       -102 14 -165 30 -170 44 -371 38 -532 -17z" />
                                </g>
                            </svg>
                            <div class="SSNContent">
                                <i class="mkov-facial"></i>
                                <span>Facials</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#body_therapy">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1560 2919 c-1285 -156 -1790 -718 -1459 -1625 305 -836 1087 -1375
                                       1835 -1266 826 122 1314 467 1386 982 122 875 -341 1790 -933 1843 -65 6 -154
                                       24 -198 40 -97 37 -431 51 -631 26z" />
                                </g>
                            </svg>
                            <div class="SSNContent">
                                <i class="mkov-stone"></i>
                                <span>Body Therapy</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#medication">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)" fill="#252525"
                                    stroke="none">
                                    <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                       -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                       1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z" />
                                </g>
                            </svg>
                            <div class="SSNContent">
                                <i class="mkov-morter"></i>
                                <span>Medication</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="commonSection serviceSection lessPaddings hasBeforeDecoration hasAfterDecoration" id="spa_solution">
        <div class="layer_img l_01 move_anim">
            <img src="makeover/images/bg/12.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Fair Price</h5>
                        <h2>SPA <span class="colorPrimary fontWeight400">Solutions</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br> maecenas accumsan lacus
                            vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p1.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Makeup &amp; Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p2.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Sauna relax</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p3.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Geothermal spa</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p4.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Backbone therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $39
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p5.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Aroma therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p6.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Face facial</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p7.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Body Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $45
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p8.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Massage therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $42
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
            <div class="row pt18">
                <div class="col-lg-12 text-center">
                    <a href="" class="mo_btn mob_lg mo_reverse"><i class="icofont-calendar"></i>Book
                        Appointment</a>
                </div>
            </div>
        </div>
        <div class="layer_img l_02 move_anim_two">
            <img src="makeover/images/bg/11.png" alt="">
        </div>
    </section>
    <section class="commonSection" id="massage">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Fair Price</h5>
                        <h2>Body <span class="colorPrimary fontWeight400">Massage</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br> maecenas accumsan lacus
                            vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p1.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Makeup &amp; Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p2.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Sauna relax</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p3.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Geothermal spa</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p4.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Backbone therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $39
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p5.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Aroma therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p6.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Face facial</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p7.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Body Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $45
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p8.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Massage therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $42
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
            <div class="row pt18">
                <div class="col-lg-12 text-center">
                    <a href="" class="mo_btn mob_lg mo_reverse"><i class="icofont-calendar"></i>Book
                        Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection  lessPaddings serviceSection hasBeforeDecoration hasAfterDecoration" id="facials">
        <div class="layer_img l_01 move_anim">
            <img src="makeover/images/bg/12.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Fair Price</h5>
                        <h2>Facial <span class="colorPrimary fontWeight400">Programs</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br> maecenas accumsan lacus
                            vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p1.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Makeup &amp; Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p2.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Sauna relax</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p3.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Geothermal spa</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p4.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Backbone therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $39
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p5.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Aroma therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p6.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Face facial</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p7.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Body Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $45
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p8.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Massage therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $42
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
            <div class="row pt18">
                <div class="col-lg-12 text-center">
                    <a href="" class="mo_btn mob_lg mo_reverse"><i class="icofont-calendar"></i>Book
                        Appointment</a>
                </div>
            </div>
        </div>
        <div class="layer_img l_02 move_anim_two">
            <img src="makeover/images/bg/11.png" alt="">
        </div>
    </section>
    <section class="commonSection" id="body_therapy">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Fair Price</h5>
                        <h2>Body <span class="colorPrimary fontWeight400">Therapy</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br> maecenas accumsan lacus
                            vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p1.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Makeup &amp; Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p2.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Sauna relax</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p3.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Geothermal spa</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p4.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Backbone therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $39
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p5.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Aroma therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p6.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Face facial</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p7.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Body Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $45
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p8.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Massage therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $42
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
            <div class="row pt18">
                <div class="col-lg-12 text-center">
                    <a href="" class="mo_btn mob_lg mo_reverse"><i class="icofont-calendar"></i>Book
                        Appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="commonSection serviceSection lessPaddings hasBeforeDecoration hasAfterDecoration" id="medication">
        <div class="layer_img l_01 move_anim">
            <img src="makeover/images/bg/12.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="sectionTitle text-center">
                        <img src="makeover/images/icons/2.png" alt="">
                        <h5 class="primaryFont">Fair Price</h5>
                        <h2>Herbal <span class="colorPrimary fontWeight400">Medications</span></h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br> maecenas accumsan lacus
                            vel facilisis.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p1.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Makeup &amp; Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $50
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p2.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Sauna relax</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $61
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p3.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Geothermal spa</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $47
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pl_area">
                        <img src="makeover/images/home_01/p4.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Backbone therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $39
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p5.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Aroma therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $55
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p6.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Face facial</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $60
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p7.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Body Massage</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $45
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                    <div class="package_item pr_area">
                        <img src="makeover/images/home_01/p8.jpg" alt="">
                        <h5>
                            <a href="javascript:void(0);">Massage therapy</a>
                            <span class="piborder"></span>
                            <span>from</span>
                            $42
                        </h5>
                        <p>20 mins Revitalize Facial</p>
                    </div>
                </div>
            </div>
            <div class="row pt18">
                <div class="col-lg-12 text-center">
                    <a href="" class="mo_btn mob_lg mo_reverse"><i class="icofont-calendar"></i>Book
                        Appointment</a>
                </div>
            </div>
        </div>
        <div class="layer_img l_02 move_anim_two">
            <img src="makeover/images/bg/11.png" alt="">
        </div>
    </section>
</section>

<section class="commonSection">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="sectionTitle text-center">
                    <img src="makeover/images/icons/2.png" alt="">
                    <h5 class="primaryFont">Fair Pricing</h5>
                    <h2>Pricing <span class="colorPrimary fontWeight400">Packages</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                        Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel
                        facilisis.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs pricingTab" id="pricingTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="spa_solution_tab" data-toggle="tab" href="#spa_solution_items"
                            role="tab" aria-controls="spa_solution_items" aria-selected="true">
                            <div class="svgContainer">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                    height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                                        fill="#252525" stroke="none">
                                        <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                           -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                           1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z" />
                                    </g>
                                </svg>
                                <i class="mkov-candle"></i>
                            </div>
                            <span>SPA Solution</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="massage_tab" data-toggle="tab" href="#massage_items" role="tab"
                            aria-controls="massage_items" aria-selected="false">
                            <div class="svgContainer">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                    height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                                        fill="#252525" stroke="none">
                                        <path d="M1572 2919 c-708 -80 -1193 -291 -1416 -614 -534 -777 474 -2293
                                           1524 -2292 887 1 1576 436 1644 1037 101 889 -356 1757 -949 1804 -69 5 -160
                                           22 -202 38 -98 37 -396 51 -601 27z" />
                                    </g>
                                </svg>
                                <i class="mkov-massage"></i>
                            </div>
                            <span>Massage</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="facials_tab" data-toggle="tab" href="#facials_items" role="tab"
                            aria-controls="facials_items" aria-selected="false">
                            <div class="svgContainer">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="175.000000pt"
                                    height="152.000000pt" viewBox="0 0 175.000000 152.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,152.000000) scale(0.050000,-0.050000)"
                                        fill="#252525" stroke="none">
                                        <path d="M1115 2973 c-533 -182 -1118 -1037 -1091 -1597 31 -647 948 -1379
                                           1694 -1351 1127 43 2049 1058 1675 1845 -197 414 -1177 1090 -1581 1090 -27 0
                                           -102 14 -165 30 -170 44 -371 38 -532 -17z" />
                                    </g>
                                </svg>
                                <i class="mkov-facial"></i>
                            </div>
                            <span>Facials</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="body_therapy_tab" data-toggle="tab" href="#body_therapy_items"
                            role="tab" aria-controls="body_therapy_items" aria-selected="false">
                            <div class="svgContainer">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                    height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                                        fill="#252525" stroke="none">
                                        <path d="M1560 2919 c-1285 -156 -1790 -718 -1459 -1625 305 -836 1087 -1375
                                           1835 -1266 826 122 1314 467 1386 982 122 875 -341 1790 -933 1843 -65 6 -154
                                           24 -198 40 -97 37 -431 51 -631 26z" />
                                    </g>
                                </svg>
                                <i class="mkov-stone"></i>
                            </div>
                            <span>Body Therapy</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="medication_tab" data-toggle="tab" href="#medication_items" role="tab"
                            aria-controls="medication_items" aria-selected="false">
                            <div class="svgContainer">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="167.000000pt"
                                    height="147.000000pt" viewBox="0 0 167.000000 147.000000"
                                    preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,147.000000) scale(0.050000,-0.050000)"
                                        fill="#252525" stroke="none">
                                        <path d="M1257 2920 c-50 -9 -109 -25 -130 -35 -20 -11 -95 -25 -165 -31 -523
                                           -45 -900 -630 -953 -1477 -43 -680 253 -1056 996 -1266 720 -204 1195 -98
                                           1691 377 805 772 854 1763 105 2149 -412 213 -1153 349 -1544 283z" />
                                    </g>
                                </svg>
                                <i class="mkov-morter"></i>
                            </div>
                            <span>Medication</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="spa_solution_items" role="tabpanel"
                        aria-labelledby="spa_solution_tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p1.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Makeup &amp; Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $50
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p2.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Sauna relax</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $61
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p3.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Geothermal spa</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $47
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p4.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Backbone therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $39
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p5.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Aroma therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $55
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p6.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Face facial</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $60
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p7.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Body Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $45
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p8.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Massage therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $42
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt18">
                            <div class="col-lg-12 text-center">
                                <a href="" class="mo_btn mob_lg mo_reverse"><i
                                        class="icofont-calendar"></i>Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="massage_items" role="tabpanel" aria-labelledby="massage_tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p1.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Makeup &amp; Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $50
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p2.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Sauna relax</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $61
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p3.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Geothermal spa</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $47
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p4.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Backbone therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $39
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p5.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Aroma therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $55
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p6.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Face facial</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $60
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p7.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Body Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $45
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p8.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Massage therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $42
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt18">
                            <div class="col-lg-12 text-center">
                                <a href="" class="mo_btn mob_lg mo_reverse"><i
                                        class="icofont-calendar"></i>Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="facials_items" role="tabpanel" aria-labelledby="facials_tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p1.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Makeup &amp; Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $50
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p2.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Sauna relax</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $61
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p3.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Geothermal spa</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $47
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p4.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Backbone therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $39
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p5.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Aroma therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $55
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p6.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Face facial</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $60
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p7.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Body Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $45
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p8.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Massage therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $42
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt18">
                            <div class="col-lg-12 text-center">
                                <a href="" class="mo_btn mob_lg mo_reverse"><i
                                        class="icofont-calendar"></i>Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="body_therapy_items" role="tabpanel"
                        aria-labelledby="body_therapy_tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p1.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Makeup &amp; Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $50
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p2.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Sauna relax</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $61
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p3.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Geothermal spa</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $47
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p4.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Backbone therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $39
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p5.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Aroma therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $55
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p6.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Face facial</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $60
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p7.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Body Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $45
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p8.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Massage therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $42
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt18">
                            <div class="col-lg-12 text-center">
                                <a href="" class="mo_btn mob_lg mo_reverse"><i
                                        class="icofont-calendar"></i>Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="medication_items" role="tabpanel" aria-labelledby="medication_tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p1.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Makeup &amp; Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $50
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p2.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Sauna relax</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $61
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p3.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Geothermal spa</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $47
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pl_area">
                                    <img src="makeover/images/home_01/p4.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Backbone therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $39
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p5.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Aroma therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $55
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p6.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Face facial</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $60
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p7.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Body Massage</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $45
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                                <div class="package_item pr_area">
                                    <img src="makeover/images/home_01/p8.jpg" alt="">
                                    <h5>
                                        <a href="javascript:void(0);">Massage therapy</a>
                                        <span class="piborder"></span>
                                        <span>from</span>
                                        $42
                                    </h5>
                                    <p>20 mins Revitalize Facial</p>
                                </div>
                            </div>
                        </div>
                        <div class="row pt18">
                            <div class="col-lg-12 text-center">
                                <a href="" class="mo_btn mob_lg mo_reverse"><i
                                        class="icofont-calendar"></i>Book Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection