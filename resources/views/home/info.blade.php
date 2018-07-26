@extends('template')


@section('content')
    @include('menu')
    <div id="moreinfo" class="container">
        <div class="row pt-5 mt-5 mx-1">
            <div class="col-md-12">
                <h1 class="blueinfo">{{ $lang === "en" ? "WHY CHOOSE AN-TAR?" : "Mengapa Memilih AN-TAR?" }}</h1>
            </div>
        </div>
        <div class="row pb-5  mx-1">
            <div class="col-md-5 mb-4">
                <img src="<?php echo url('/');?>/images/4.png" class="img-fluid">
            </div>
            <div class="col-md-6 ">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="<?php echo url('/');?>/images/info1.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> {{ $lang === "en" ? "FAST" : "CEPAT" }} </h3>
                        <p class="aerial"> {{ $lang === "en" ? "In just 15 minutes, we guarantee the order has reached you. Because all the couriers have been provided with a clear SOP. Enjoy the convenience of shopping with professional & trained courier" 
                        : "Hanya dalam 15 menit, pesanan yang di-order dijamin sudah sampai di tangan Anda. Karena semua kurir telah dibekali SOP yang jelas. Nikmati kenyamanan berbelanja dengan kurir profesional dan terlatih. " }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="<?php echo url('/');?>/images/info2.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> {{ $lang === "en" ? "SIMPLE" : "MUDAH" }} </h3>
                        <p class="aerial">L{{ $lang === "en" ? "Simply order in AN-TAR, goods & foods delivered directly by our courier. Everyone can shop through Mobile App. AN-TAR provides easy access to meet your needs instantaneously." 
                        : "Cukup order di An-Tar, barang atau makanan langsung diantar oleh kurir kami. Setiap orang bisa belanja melalui Mobile App. An-Tar menyediakan akses mudah untuk memenuhi kebutuhan Anda seketika. " }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="<?php echo url('/');?>/images/info3.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> {{ $lang === "en" ? "SECURE" : "AMAN" }} </h3>
                        <p class="aerial">{{ $lang === "en" ? "Couriers are already registered in AN-TAR and use clear uniforms and identities" 
                        : "Kurir yang sudah terdaftar di An-Tar dan menggunakan seragam serta identitas yang jelas.
                        " }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="<?php echo url('/');?>/images/info4.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> {{ $lang === "en" ? "EFFICIENT" : "EFISIEN" }} </h3>
                        <p class="aerial">{{ $lang === "en" ? "No more queuing & complicated. You can shop online at favorite stores with An-Tar apps. Enjoy time efficiency, so you can relax with your family." 
                        : "Tidak perlu lagi mengantri atau ribet. Anda bisa belanja secara online di toko favorit dengan aplikasi An-Tar. Nikmati efisiensi waktu, supaya Anda dapat bersantai bersama keluarga. 
                        " }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="<?php echo url('/');?>/images/info5.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> {{ $lang === "en" ? "SUSTAINABLE" : "BERKELANJUTAN" }} </h3>
                        <p class="aerial">{{ $lang === "en" ? "Social welfare increases through Mobile App-based instant shopping services. Retail, restaurant, building and courier revenue are increasing. Users can also save time and effort in shopping." 
                        : "Kesejahteraan sosial meningkat melalui layanan belanja instan berbasis Mobile App. Pendapatan retail, resto, pengelola gedung maupun kurir semakin meningkat. User juga bisa menghemat waktu dan tenaga dalam berbelanja." }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('footer')

@stop