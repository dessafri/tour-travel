@extends('layouts.app')

@section('title')
    My Account
@endsection
@section('content')
    <main>
        <div class="container">
            <h2 class="text-center">Edit Profile</h2>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <div class="img-profile d-flex justify-content-center">
                <img class="rounded-circle" src="/storage/assets/profile/{{$user->image}}" style="width:100px; height:100px;">
            </div>
            <form action="{{route('myAccountUpdate', Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}">
                </div>
                <div class="form-group">
                    <label for="username" >Username</label>
                    <input type="text" class="form-control" name="username" id="Username" value="{{ Auth::user()->username }}">
                </div>
                <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}">
                </div>
                <div class="form-group">
                    <label for="handphone" >Handphone</label>
                    <input type="text" class="form-control" name="handphone" id="handphone" value="{{ Auth::user()->handphone }}">
                </div>
                <div class="form-group">
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <button class="btn btn-success" type="submit"> Save Data</button>
            </form>
        </div>
    </main>
@endsection
