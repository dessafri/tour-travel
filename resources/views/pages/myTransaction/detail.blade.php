@extends('layouts.app')

@section('title')
    My Transactions
@endsection
@section('content')
    <main>
        <div class="container">
            <div class="row">
                    <div class="card-body">
                <h3 class="text-center mt-3 mb-5">My Transactions</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $item -> id }}</td>
                    </tr>
                    <tr>
                        <th>Paket Travel</th>
                        <td>{{ $item -> travel_package -> title }}</td>
                    </tr>
                    <tr>
                        <th>Pembeli</th>
                        <td>{{ $item -> user -> name }}</td>
                    </tr>
                    <tr>
                        <th>Keberangkatan</th>
                        <td>{{ \Carbon\Carbon::create($item -> travel_package -> departure_date)->format('d M y') }}</td>
                    </tr>
                    <tr>
                        <th>Total Transaksi</th>
                        <td>${{ $item -> transaction_total }}</td>
                    </tr>
                    <tr>
                        <th>Status Transaksi</th>
                        <td>{{ $item -> transaction_status }}</td>
                    </tr>
                    <tr>
                        <th>Pembelian</th>
                        <td>
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                </tr>
                                @foreach($item->details as $detail)
                                    <tr>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->username }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </td>
                    </tr>
                </table>
                @if ($item->transaction_status == "PENDING")
                <div class="card-body">
                   <h3 class="mb-4">Selesaikan Pembayaranmu</h3>
                   <p>Silahkan Transfer Ke Rekening </p>
                   <p class="mt-2"><strong>BNI</strong></p>
                   <p> <strong> Atas Nama </strong> Fajar Andaru <br> <strong>No Rekening </strong>0732966970</p>
                   <p>Sebesar <strong> Rp {{number_format($item->transaction_total,2, ',', '.') }}</strong></p>

               </div>

               @elseif ($item->transaction_status == "IN_CART")

               <div class="card-body d-flex justify-content-center">
                   <a href="{{route('checkout_process',$item->id)}}" class="btn btn-primary">Selesaikan Pesananmu</a>
               </div>

                @endif
            </div>
        </div>
            </div>
            </div>
    </main>
@endsection
