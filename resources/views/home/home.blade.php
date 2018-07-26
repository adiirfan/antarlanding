    @extends('template')


    @section('content')
        @include('menu')
    <!-- Page Content -->
        <!-- SLIDER PC !-->
        <div id="carousel" class="carousel slide d-none d-sm-block " data-ride="carousel">

        <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>

             </ul>

        <!-- The slideshow -->
            <div class="carousel-inner">

            <div class="carousel-item overlay active">
                <img  src="/images/1.jpg" class="str object-fit_cover">
                <div class="carousel-caption-custom">
                    <h3 class="captionf">WHAT'S NEW?</h3>
                    <h1 class="captionf">EXPERIENCE OUR </h1>
                    <h1 class="captionf">MOST UPDATED SERVICE</h1>
                    <a href="/info" class="btn btn-light moreinfo-caption">MORE INFO<span class="ml-2">
                            <img src="/images/panah.png"></span>
                    </a>
                </div>
            </div>
            <!--div class="carousel-item">
                <img  src="/images/1.jpg" >
            </div>
            <div class="carousel-item">
                <img  src="/images/1.jpg" >
            </div!-->
            </div>
        </div>
        <!--END OF SLIDER PC -->
        <div id="carouselm" class="carousel slide d-block d-sm-none" data-ride="carouselm">
            <ul class="carousel-indicators">
                <li data-target="#carouselm" data-slide-to="0" class="active"></li>

            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/images/1.jpg" class="str object-fit_cover" height="500">
                    <div class="carousel-caption-custom-m px-2">
                        <h3 class="captionf">WHAT'S NEW?</h3>
                        <h1 class="captionf">EXPERIENCE OUR </h1>
                        <h1 class="captionf">MOST UPDATED SERVICE</h1>
                        <button type="button" class="btn btn-light moreinfo-caption-m">MORE INFO<span class="ml-2"><img src="/images/panah.png"></span></button>
                    </div>
                </div>

            </div>

        </div>


        <div id="aboutus" class="container my-5">
            <div class="row">
                <div class="col-md-1 clearfix">

                </div>
                <div class="col-md-5">
                    <img src="images/2.jpg" class="img-fluid">
                </div>
                <div class="col-md-5">
                   <div class="row">
                       <div class="col nulled border-dotted-bottom"></div>
                   </div>
                    <div class="row py-4 border-dotted-bottom border-dotted-top">
                        <div class="col">
                            <h2 style="color:#009ddf;margin-bottom:0px !important;">ABOUT US</h2>
                            <h1 style="color:#009ddf;">A GLIMPSE OF AN-TAR<br></h1>
                                <p class="aerial">Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan
                                penataan huruf atau typesetting. Lorem Ipsum telah menjadi
                                </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col nulled border-dotted-top ">
                            <button type="button" class="btn moreinfo-aboutus my-3 float-right">MORE INFO<span class="ml-2"><img src="/images/panah_putih.png"></span></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 clearfix">

                </div>
            </div>
        </div>
    <!-- SLIDER PC -->
    <div id="carousels" class="carousel slide mt-5 d-none d-sm-block " data-ride="carousels">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#carousels" data-slide-to="0" class="active"></li>
            <li data-target="#carousels" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner-custom">

            <div class="carousel-item carousel-custom active">
                <img  src="/images/3.jpg" class="str2 object-fit_cover">
                <div class="carousel-caption-custom-2">
                    <div class="text-center py-4 our-services" style="width:350px;">
                    <p class="captionf border-dotted-bottom border-dotted-top py-1">OUR SERVICES </p>
                    </div>
                    <div style="width:350px;">
                        <div class="row">
                            <div class="col-md-2">
                              <img src="images/food.png">
                            </div>
                            <div class="col">
                                <p class="thin pt-1" style="font-size:1.3rem;">AN-TAR FOOD (RESTAURANT & STREET FOOD)<span class="aerial-white">
                                Courier buy foods orders at restaurants and street snacks delivers it to you</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--div class="carousel-item">
                <img  src="/images/1.jpg" >
            </div>
            <div class="carousel-item">
                <img  src="/images/1.jpg" >
            </div!-->
        </div>
    </div>
    <!--END OF SLIDER PC-->
    <!--SLIDER MOBILE-->
    <div id="carouselms" class="carousel slide d-block d-sm-none" data-ride="carouselms">
        <ul class="carousel-indicators">
            <li data-target="#carouselms" data-slide-to="0" class="active"></li>

        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/3.jpg" alt="Los Angeles" class="str object-fit_cover" height="400">
                <div class="carousel-caption-custom-m px-2 ml-4 mr-auto">
                    <p class="captionf border-dotted-bottom border-dotted-top py-1">OUR SERVICES </p>
                    <p class="thin pt-1" style="font-size:1.3rem;">AN-TAR FOOD (RESTAURANT & STREET FOOD)
                        <span class="aerial-white">
                                Courier buy foods orders at restaurants and street snacks delivers it to you
                        </span>
                    </p>

                </div>
            </div>

        </div>

    </div>
    <!--END OF SLIDER MOBILE-->

    <div id="download" class="container-fluid py-5">
        <div class="row">
            <div class="col-md-3 clearfix"></div>
            <div class="col-md-6">
                <div class="text-center py-4 download" style="width:100%">
                    <p class="captionf border-dotted-bottom border-dotted-top py-1">DOWNLOAD<span class="thin">
                            AN-TAR APPLICATION NOW
                        </span></p>
                </div>
            </div>
            <div class="col-md-3 clearfix"></div>
        </div>
        <div class="row">
            <div class="col-md-3 clearfix">

            </div>
            <div class="col-md-2 text-center">
                <img src="images/antar_home.png" class="img-fluid">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col nulled"></div>
                </div>
                <div class="row py-4">
                    <div class="col">
                        <img src="images/logo.png">
                        <p class="aerial-white my-1">
                            An-Tar is a Mobile App-based instan shopping service.Get a complete selecetion of different brands and thousands of your favorite products in 18 categories in An-Tar
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col nulled">
                        <div class="col">
                            <img class="logodownload mr-1 img-fluid" src="images/googleplay.png" >
                            <img class="logodownload img-fluid" src="images/appstore.png"  >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 clearfix">

            </div>
        </div>
    </div>

    <div id="usermanual" class="container-fluid pt-4 ">
        <div class="row">
            <div class="col-md-2 clearfix"></div>
            <div class="col-md-4">
                <img src="images/hand.png" class="img-fluid hand">
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col nulled-guide"></div>
                </div>
                <div class="row py-1 mx-auto">
                    <div class="text-left py-4 download" style="width:100%">
                        <p class="quick border-dotted-bottom border-dotted-top py-1 thin user-guides">USER MANUAL
                            <span><img src="images/play.png"</span>
                            <span><img src="images/play.png"</span>
                            <span><img src="images/play.png"</span>
                            <br><span class="thin our-services">
                            A QUICK GUIDE
                        </span></p>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="images/guide1.png">
                        </div>
                        <div class="col">
                            <h3 class="thin-white-h3">STEP 1</h3>
                            <p class="aerial-white">Login or Register to An-Tar App by fill in phone number and password</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="images/guide2.png">
                        </div>
                        <div class="col">
                            <h3 class="thin-white-h3">STEP 2</h3>
                            <p class="aerial-white">Login or Register to An-Tar App by fill in phone number and password</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="images/guide3.png">
                        </div>
                        <div class="col">
                            <h3 class="thin-white-h3">STEP 3</h3>
                            <p class="aerial-white">Login or Register to An-Tar App by fill in phone number and password</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="images/guide4.png">
                        </div>
                        <div class="col">
                            <h3 class="thin-white-h3">STEP 4</h3>
                            <p class="aerial-white">Login or Register to An-Tar App by fill in phone number and password</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-2 clearfix" > </div>
        </div>
    </div>


    @include('footer')

    @stop

