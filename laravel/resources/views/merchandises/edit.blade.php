@extends('welcome.base')

@section('content')
<h1>Edit User</h1>
  <div class="row">
    <div class="col-md-5">
        <form action="{{url('users/'.$user->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" value="{{$user->id}}" disabled>
                @error('id')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control" value="{{$user->username}}">
                @error('username')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="fullname">Fullname</label>
                <input type="text" name="fullname" class="form-control" value="{{$user->fullname}}">
                @error('fullname')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="phoneNumber">Phone Number</label>
                <input type="text" name="phoneNumber" class="form-control" value="{{$user->phoneNumber}}">
                @error('phoneNumber')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email}}">
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary" type="submit">
                    Update User
                </button>
            </div>
        </form>
    </div>
  </div>
@endsection