<div class="container">
        <div class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="{{ route('home') }}" class="navbar-brand " id="home">
                <img src="{{ url('frontend/images/logo-travel.png') }}" alt="logo NOMADS">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-ml-2 ">
                        <a href="{{ route('home')}}" class="nav-link active home">Home</a>
                    </li>
                    <li class="nav-item mx-ml-2">
                        <a href="{{ route('travel_pakackages')}}" class="nav-link travel">Paket Travel</a>
                    </li>
                    <li class="nav-item mx-ml-2">
                        <a href="#testimonialContent" class="nav-link testimonial">Testimonial</a>
                    </li>

                </ul>
                <!-- mobile button -->

                @guest
                    <form class="form-inline d-sm-block d-md-none d-block">
                    <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault();
                    location.href='{{ url('login') }}'">
                        Masuk
                    </button>
                </form>


                <!-- dekstop button -->

                <form class="form-inline my-2 my-lg-0 d-md-block d-none">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault();
                    location.href='{{ url('login') }}'">
                        Masuk
                    </button>
                </form>
                @endguest

                @auth
                @if(Auth::user()->roles == 'ADMIN')
                <button class="btn btn-login my-2 my-sm-0 d-md-none d-block" type="button" onclick="event.preventDefault();
                    location.href='{{ route('dashboard') }}'">
                        Admin
                </button>

                <!-- dekstop button -->
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4 d-none d-md-block" type="button" onclick="event.preventDefault();
                    location.href='{{ route('dashboard') }}'">
                        Admin
                </button>

                @endif

                @if(Auth::user()->roles=='USER')
                {{--  <button class="btn btn-login my-2 my-sm-0 d-md-none d-block" type="button" onclick="event.preventDefault();
                    location.href='{{ route('dashboard') }}'">
                        Akun Saya
                </button>  --}}


                {{--  onclick="event.preventDefault();
                        location.href='{{ route('dashboard') }}'"  --}}
                <div class="dropdown">

                    <button class="btn btn-secondary dropdown-toggle btn-login d-block d-md-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Akun Saya
                    </button>

                    <!-- dekstop button -->
                    <button class="btn btn-secondary dropdown-toggle btn-login btn-navbar-right d-md-block d-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Akun Saya
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href="{{route('myAccount', Auth::user()->id)}}">
                        <i class="fas fa-user-alt"></i>  Edit Akun
                        </a>
                        <a class="dropdown-item" href="{{route('myTransactions')}}"><i class="fas fa-dollar-sign"></i>  Transaksi Saya</a>
                        <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt" id="logout"></i>  Logout
                        </a>
                    </div>
                </div>

                @endif
                @endauth
            </div>

        </div>
    </div>
