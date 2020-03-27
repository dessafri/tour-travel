@extends('layouts.success')

@section('title')
    Success
@endsection
@section('content')
    <main>
            <div class="section-success d-flex align-items-center mt-5">
                <div class="col text-center">
                    <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
                    <h1 class="mb-3">Yay! Success</h1>

                    <h5>Silahkan Cek Riwayat Transaksi Anda Untuk Detail Pembayaran</h5>

                    <h3>Silahkan Konfirmasi Ke Fajar Tour And Travel</h3>
                    <p>Sertakan Bukti Transfer Agar Dapat Di Konfirmasi</p>
                        <p>0813 - 3515 - 6892</p>
                    <a href="{{ route('home') }}" class="btn btn-homepage mt-3 px-5">
                        Home Page
                    </a>
                </div>
            </div>
    </main>
@endsection
