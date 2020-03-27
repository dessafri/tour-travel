@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
            <a href="{{ route('travel-packages.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fas-plus text-white-50"></i> Tambah Paket Travel
            </a>
        </div>
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table class=" table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Type</th>
                            <th>Departure Date</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                            <td>{{ $item -> id }}</td>
                            <td>{{ $item -> title }}</td>
                            <td>{{ $item -> location }}</td>
                            <td>{{ $item -> type }}</td>
                            <td>{{ $item -> departure_date }}</td>
                            <td>{{ $item ->  duration}}</td>
                            <td>
                                <a href="{{ route('travel-packages.edit', $item -> id) }}" class="btn btn-info">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('travel-packages.destroy', $item->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
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



@endsection
