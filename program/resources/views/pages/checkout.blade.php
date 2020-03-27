@extends('layouts.checkout')

@section('title')
    Checkout
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
                                <li class="breadcrumb-item ">
                                    Details
                                </li>
                                <li class="breadcrumb-item active">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                            <h1>Who is Going?</h1>
                            <p>Trip to{{ $item ->travel_package->name }}, {{ $item->travel_package->location }}</p>

                            <div class="atteend">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @forelse($item->details as $detail)
                                        <tr>
                                            <td>
                                                <img src="/storage/assets/profile/{{Auth::user()->image}}" height="60" class="rounded-circle"/>
                                            </td>
                                            <td class="align-middle">
                                                {{ $detail->username }}
                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ route('checkout-remove', $detail->id) }}">
                                                    <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
                                                    No Visitor
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <h2>Add Member</h2>
                                <div class="member mt-3">
                                    <form action="{{ route('checkout-create', $item->id) }}" method="post" class="form-inline">
                                        @csrf
                                        <label for="username" class="sr-only">Name</label>
                                        <input type="text" name="username" id="username" class="form-control mb-2 mr-sm-2"  placeholder="Username">

                                        <label for="nationality" class="sr-only">Nationality</label>
                                        {{--  <input type="text" name="nationality" id="nationality" class="form-control mb-2 mr-sm-2" style="width: 50px;" placeholder="Nationality">

                                        <label for="doePassport" class="sr-only"
                                        >DOE Passport</label
                                        >  --}}
                                        {{--  <div class="input-group mb-2 mr-sm-2">
                                        <input
                                            type="text"
                                            name="doe_passport"
                                            class="form-control datepicker"
                                            style="width:150px;"
                                            id="doePassport"
                                            placeholder="DOE Passport"
                                        />
                                        </div>  --}}
                                        <button class="btn btn-add-now px-4 mb-2" type="submit">
                                            Add Now
                                        </button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2 class="mt-2">Checkout Informations</h2>
                            <hr>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">{{ $item->details->count() }} Orang</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">Rp {{number_format($item->travel_package->price,2, ',', '.') }} </td>
                                </tr>
                                <tr>
                                    <th width="50%"></th>
                                    <td width="50%" class="text-right price">Per {{ $item ->travel_package-> price_detail }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">Rp {{ number_format($item->transaction_total,2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">Rp {{number_format($item->transaction_total,2, ',', '.') }}</span
                                        ><span class="text-orange">{{ mt_rand(0,99) }}</span>
                                    </td>
                                </tr>
                            </table>
                            <p>*Unicode Berwarna Orange</p>
                            <hr />

                        </div>

                        <!-- akhir card -->
                        <div class="join-container">
                            <a href="{{ route('checkout-success',$item->id) }}" class="btn btn-block btn-join mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="cancel-container text-center mt-2">
                            <a href="{{ route('detail',$item->travel_package->slug) }}">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

