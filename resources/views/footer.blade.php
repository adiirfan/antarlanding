<div id="footer" class="container-fluid pt-4">
    <div class="row">
    <div class="col-md-2 clearfix"></div>
        <div class="col-md-8">
            <div class="row pb-5 py-3">

            <div class="col-md-auto mx-auto">
                <img src="<?php echo url('/');?>/images/logo.png" class="pb-3"><br>
                <p class="aerial-white">
                    021 8066 8899</p>
                <p class="aerial-white">
                    support.id@antar.com
                </p>
            </div>
            <div class="col-md-auto col-xs-3 mx-auto">
                <h3 class="thin-white-h3 pt-3">{{ $lang === "en" ? "Company" : "Perusahaan" }}</h3>
                <p class="aerial-white">
                    {{ $lang === "en" ? "About Us" : "Tentang Kami" }}<br>
                    Media<br>
                    Blog<br>
                </p>
            </div>
            <div class="col-md-auto col-xs-3 mx-auto">
                <h3 class="thin-white-h3 pt-3">{{ $lang === "en" ? "OUR SERVICES" : "LAYANAN KAMI" }}</h3>
                <p class="aerial-white">
                    {{ $lang === "en" ? "Restaurant" : "Restoran" }}<br>
                    {{ $lang === "en" ? "Minimart" : "Minimarket" }}<br>
                    {{ $lang === "en" ? "Street Food" : "Makanan Pinggir Jalan" }}<br>
                </p>
            </div>
            <div class="col-md-auto col-xs-3 mx-auto">
                <h3 class="thin-white-h3 pt-3">PARTNERSHIP</h3>
                <p class="aerial-white">
                    {{ $lang === "en" ? "AN-TAR Partner" : "Mitra AN-TAR" }}<br><br>

                </p>
            </div>
            </div>
            <div class="row py-3 border-top">

            <div class="col-auto text-center mx-auto">
                <img src="<?php echo url('/');?>/images/facebook.png" class="mx-4">
                <img src="<?php echo url('/');?>/images/twitter.png" class="mx-4">
                <img src="<?php echo url('/');?>/images/insta.png" class="mx-4">
            </div>

            </div>
        </div>

        <div class="col-md-2 clearfix"></div>
    </div>
</div>
<div id="footer2" class="container-fluid">
    <div class="row py-4">
        <div class="col-md-2 clearfix"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-auto">
                    <p class="aerial-white">{{ $lang === "en" ? "Terms of Service" : "Ketentuan Layanan" }}
                        | {{ $lang === "en" ? "Privacy Policy" : "Kebijakan Privasi" }}
                    </p>
                </div>
                <div class="col-auto mx-auto">
                    <p class="text-white thin">© AN-TAR 2018 </p>
                </div>
                <div class="col-auto text-left">
                    <img class="logodownload mr-1" src="<?php echo url('/');?>/images/googleplay.png" >
                    <img class="logodownload" src="<?php echo url('/');?>/images/appstore.png" >
                </div>
            </div>

        </div>
        <div class="col-md-2 clearfix"></div>

    </div>
</div>