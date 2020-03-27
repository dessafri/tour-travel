@extends('layouts.app')

@section('title')
    My Account
@endsection
@section('content')
    <main>
        <div class="container">
            <h2 class="text-center">Edit Profile</h2>
            <div class="img-profile d-flex justify-content-center">
                <img class="rounded-circle" src="/storage/assets/profile/{{$user->image}}" style="width:150px;,height:150px;">
            </div>
            <form>
                <div class="form-group">
                    <label for="name" >Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}"disabled>
                </div>
                <div class="form-group">
                    <label for="username" >Username</label>
                    <input type="text" class="form-control" name="Username" id="Username" value="{{ $user->username }}"disabled>
                </div>
                <div class="form-group">
                    <label for="email" >Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $user->email }}"disabled >
                </div>
                <div class="form-group">
                    <label for="handphone" >Handphone</label>
                    <input type="text" class="form-control" name="handphone" id="handphone" value="{{ $user->handphone }}" disabled>
                </div>

                <a href="{{route('myAccountEdit', Auth::user()->id)}}" class="btn btn-primary">Edit Data</a>
            </form>
        </div>
    </main>
@endsection
