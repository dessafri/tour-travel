@extends('layouts.app')


@section('title')
    Fajar Tour And Travel
@endsection

@section('content')
    <header class="text-center">
        <h1>
            Percayakan Liburan Anda <br> Kepada Kami
        </h1>

        <p class="mt-3">
            You will see beautiful
            <br> moment you never see before
        </p>

        <a href="#popular" class="btn btn-get-started px-4 mx-4">Aku Mau Liburan</a>

    </header>


    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>&plusmn; 300</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>&plusmn; 15</h2>
                    <p>Daerah</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>&plusmn; 50</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>&plusmn; 30</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>


        <section class="section-populer" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col  text-center section-popular-heading">
                        <h2>Wisata Populer</h2>
                        <p>Something that you never try <br> before in this world</p>
                    </div>
                </div>
            </div>
        </section>




        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center" id="section-popular-travel">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 kotak">
                        <div  class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item -> galleries -> count() ? Storage::url($item -> galleries -> first()->image) : ''}}')">
                            <div class="travel-country">{{ $item -> location }}</div>
                            <div class="travel-location">{{ $item -> title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="container row justify-content-center paginat">
                        <a href="{{ route('travel_pakackages')}}" class="btn btn-primary">Lebih Banyak</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            THEY ARE LOVING US
                        </h2>
                        <p>
                            Moments were giving them
                            <br> the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-testimonial-popular-travel row justify-content-center mt-5">
                    <div class="col-sm-6 col-md-6 col-lg-4 ">
                        <div class="card card-testimonial text-center ">
                            <div class="testimonial-content">

                                <img src="frontend/images/user-2.jpg" alt="Testimonial img" class="mb-4 rounded-circle" style="width: 120px; height: 120px;">


                                <h3 class="mb-4 text-center">Angga</h3>
                                <p class="testimonial">
                                    “ Liburan Bersama Fajar Tour And Travel Sangat Menyenangkan “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2 text-center">
                                Trip to Malang
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">

                                <img src="frontend/images/user-1.jpg" style="width: 120px; height: 120px;" alt="Testimonial img" class="mb-4 rounded-circle rounded-bottom">


                                <h3 class="mb-4 text-center">Ardi</h3>
                                <p class="testimonial">
                                    “ Pelayanan Baik, Harga Bersahabat “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2 text-center">
                                Trip to Bromo
                            </p>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">

                                <img src="frontend/images/user-3.jpg" alt="Testimonial img" class="mb-4 rounded-circle" style="width: 120px; height: 120px;">


                                <h3 class="mb-4">Rizal</h3>
                                <p class="testimonial">
                                    “ Recommended Tour Travel, Puas Sekali dengan Pelayanannya  ... “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2 text-center">
                                Trip to Karimun Jawa
                            </p>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('travel_pakackages')}}" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('travel_pakackages')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection

@push('addon-script')
    <script>
    {{--  $(window).on('load', function(e) {

    var destination = $('#home');

    $('html,body').animate({
        scrollTop: destination.offset().top - 10
    }, 1500, 'easeInOutExpo');

    e.preventDefault();


    })  --}}
    $(window).scroll(function() {
        var wScroll = $(this).scrollTop();
        if (wScroll >= 650 && $('#testimonialHeading').offset().top - 10) {
            $('.kotak').each(function(i) {
                setTimeout(function() {
                    $('.kotak').eq(i).addClass('anim')
                }, 500 * (i + 1),'easeInOutExpo')
            })

            setTimeout(function(){
                $('.paginat').addClass('pagi')
            },3000)

            {{--  $('.section-popular-content').addClass('anim');  --}}

            console.log('hei');

        }else if (wScroll >= 2668){
            $('.kotak').removeClass('anim');
            $('.paginat').removeClass('pagi');
        }
        console.log("tinggi window = " + wScroll);
    });
$(document).ready(function() {

    const travel = document.getElementsByClassName('card-travel');


    $('.btn-get-started').on('click', function(e) {

        var destination = $(this).attr('href');
        var elementDestination = $(destination);


        $('html,body').animate({
            scrollTop: elementDestination.offset().top + 80
        }, 1500, 'easeInOutExpo');


        e.preventDefault();

    });
    $('.testimonial').on('click', function(){
        var destination = $(this).attr('href');
        var elementDestination = $(destination);


        $('html,body').animate({
            scrollTop: elementDestination.offset().top - 70
        }, 1500, 'easeInOutExpo');


        e.preventDefault();
    });
    $('.home').on('click', function() {
        $('.travel').removeClass('active');
        $('.testimonial').removeClass('active');
        $('.home').addClass('active');
    });
    $('.travel').on('click', function() {
        $('.home').removeClass('active');
        $('.testimonial').removeClass('active');
        $('.travel').addClass('active');
    });
    $('.testimonial').on('click', function() {
        $('.home').removeClass('active');
        $('.travel').removeClass('active');
        $('.testimonial').addClass('active');
    });

    $('.testimonial').on('click',function(){
        console.log('btn success')
    });

});

    </script>
@endpush
