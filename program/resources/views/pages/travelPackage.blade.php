@extends('layouts.app')


@section('title')
    Travel Package
@endsection

@section('content')

    <main>
        <h1 class="text-center search-title text-white">SEARCH YOUR INCREDIBLE HOLIDAY <br> IN HERE</h1>
        <div class="bg">
        </div>
        <div class="container">
                <form action="{{route('travel_pakackages_search')}}" method="PUT" class="form-search form-inline">
                    @csrf
                    <div class="input-group mb-3">
                    <input type="text" name="search_item" class="search form-control" placeholder="Cari tempat Liburanmu disini ..."
                    <div class="input-group-append">
                        <button class=" btn btn-primary btn-cari" type="submit" id="button-addon2">Search</button>
                    </div>
                    </div>
                </form>
        </div>
                <section class="section-popular-content-more" id="popularcontent">
                    <div class="container">
                        <div class="section-popular-travel-more row justify-content-center" id="section-popular-travel">
                            @foreach ($items as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3">
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
                    {{ $items ->links() }}

                        </div>
                    </div>
                </section>


    </main>
@endsection

@push('addon-script')
    <script>
    $('.home').removeClass('active');
    $('.testimonial').removeClass('active');
    $('.travel').addClass('active');

    </script>
@endpush
