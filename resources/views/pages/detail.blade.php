@extends('layouts.app')

@section('title')
    Paket Wisata
@endsection

@section('content')
    <main>
        <section class="section-details-header">
        </section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $item -> title }}</h1>
                            <p>{{ $item -> location }}</p>

                            @if ($item -> galleries->count())
                                 <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ Storage::url($item ->galleries->first()->image) }}" width="660px" height="350px" alt="Details" class="xzoom" xoriginal="{{ Storage::url($item ->galleries->first()->image) }}" id="xzoom-main">
                                </div>
                                <div class="xzoom-thumbs">
                                    @foreach ($item -> galleries as $gallery)
                                        <a href="{{ Storage::url($gallery -> image) }}">
                                        <img src="{{ Storage::url($gallery -> image) }}" class="xzoom-gallery" width="128px" height="80px" xpreview="{{ Storage::url($gallery -> image) }}">
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                            <h2>Tentang Wisata</h2>
                            {!! $item->about !!}
                            <div class="features row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="Features Logo" class="features-image">
                                    <div class="description">
                                        <h3>Features</h3>
                                        <p>{{ $item -> featured_event }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_bahasa.png') }}" alt="Features Logo" class="features-image">
                                        <div class="description">
                                            <h3>Languages</h3>
                                            <p>{{ $item->languages }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="description">
                                        <img src="{{ url('frontend/images/ic_foods.png') }}" alt="Features Logo" class="features-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>{{ $item -> foods }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Trip Information</h2>
                            <hr>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Keberangkatan</th>
                                    <td width="50%" class="text-right">{{ $item->departure_date }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Durasi</th>
                                    <td width="50%" class="text-right">{{ $item -> duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">{{ $item -> type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Harga</th>
                                    <td width="50%" class="text-right price">Rp {{number_format($item->price, 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%"></th>
                                    <td width="50%" class="text-right price">Per {{ $item -> price_detail }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            @auth
                            <form action="{{ route('checkout_process',$item->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-block btn-join mt-3 py-2">
                                    Join Now
                                </button>
                            </form>
                            @endauth
                            @guest
                                <a href="{{ route('login') }}" class="btn btn-block btn-join mt-3 py-2">
                                Login Or Register to Join
                            </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/dist/xzoom.css') }}">
@endpush
@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#xzoom-main, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
