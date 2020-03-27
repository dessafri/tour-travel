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
                    <thead>
                        <tr>
                            {{--  <th>No</th>  --}}
                            <th>ID Transaction</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{ $item->travel_package->title }}</td>
                            <td>{{ $item->travel_package->location }}</td>
                            <td>{{ $item -> transaction_status }}</td>
                            <td>
                                <a href="{{ route('myTransactionsDetail', $item -> id) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                                @if ($item -> transaction_status == "PENDING" || $item -> transaction_status == "IN_CART")
                                    <form action="{{ route('myTransactionsHapus', $item->id) }}" method="put"
                                    class="d-inline">
                                    @csrf
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                @endif
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                </div>
            </div>
            </div>
    </main>
@endsection
