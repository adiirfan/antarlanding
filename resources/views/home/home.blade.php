    @extends('template')
    @extends('menu')
    @section('content')

    <!-- Page Content -->

        <div id="carousel" class="carousel slide " data-ride="carousel">

        <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
             </ul>

        <!-- The slideshow -->
            <div class="carousel-inner">

            <div class="carousel-item overlay active">
                <img  src="/images/1.jpg" >
                <div class="carousel-caption-custom">
                    <h3 class="captionf">WHAT'S NEW?</h3>
                    <h1 class="captionf">EXPERIENCE OUR </h1>
                    <h1 class="captionf">MOST UPDATED SERVICE</h1>
                    <button type="button" class="btn btn-light moreinfo-caption">MORE INFO<span class="ml-2"><img src="/images/panah.png"></span></button>
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
                    <div class="row py-4">
                        <div class="col">
                            <h2 style="color:#009ddf;margin-bottom:0px !important;">ABOUT US</h2>
                            <p style="color:#009ddf;font-size:3.5rem;">A GLIMPSE OF AN-TAR<br>
                            <span class="aerial">Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan
                                penataan huruf atau typesetting. Lorem Ipsum telah menjadi
                                standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak
                                dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi
                                sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, t
                                api juga telah beralih ke penataan huruf elektronik.</span>
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

    <div id="carousels" class="carousel slide mt-5 " data-ride="carousels">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#carousels" data-slide-to="0" class="active"></li>
            <li data-target="#carousels" data-slide-to="1"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner-custom">

            <div class="carousel-item carousel-custom active">
                <img  src="/images/3.jpg" >
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
    <div id="download" class="container-fluid py-5">
        <div class="row">
            <div class="col-3 clearfix"></div>
            <div class="col">
                <div class="text-center py-4 download" style="width:100%">
                    <p class="captionf border-dotted-bottom border-dotted-top py-1">DOWNLOAD<span class="thin">
                            AN-TAR APPLICATION NOW
                        </span></p>
                </div>
            </div>
            <div class="col-3 clearfix"></div>
        </div>
        <div class="row">
            <div class="col-md-3 clearfix">

            </div>
            <div class="col-md-2">
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
                            <img class="logodownload mr-1" src="images/googleplay.png" >
                            <img class="logodownload" src="images/appstore.png" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 clearfix">

            </div>
        </div>
    </div>




    @stop   