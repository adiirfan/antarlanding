@extends('template')


@section('content')
    @include('menu')
    <div id="moreinfo" class="container">
        <div class="row pt-5 mt-5 mx-1">
            <div class="col-md-12">
                <h1 class="blueinfo">WHY CHOOSE AN-TAR?</h1>
            </div>
        </div>
        <div class="row pb-5  mx-1">
            <div class="col-md-5 mb-4">
                <img src="images/4.png" class="img-fluid">
            </div>
            <div class="col-md-6 ">
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="images/info1.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> FAST </h3>
                        <p class="aerial">Login or Register to An-Tar App by fill in phone number and password</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="images/info2.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> SIMPLE </h3>
                        <p class="aerial">Login or Register to An-Tar App by fill in phone number and password</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="images/info3.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> SECURE </h3>
                        <p class="aerial">Login or Register to An-Tar App by fill in phone number and password</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="images/info4.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> EFFICIENT </h3>
                        <p class="aerial">Login or Register to An-Tar App by fill in phone number and password</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 col-md-2">
                        <img src="images/info5.png" class="img-fluid">
                    </div>
                    <div class="col">
                        <h3 class="blueinfo"> SUSTAINABLE </h3>
                        <p class="aerial">Login or Register to An-Tar App by fill in phone number and password</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('footer')

@stop