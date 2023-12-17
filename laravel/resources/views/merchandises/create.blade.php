@extends('welcome.base')

@section('content')
<h1>Create User</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('users/create')}}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="id">ID</label>
                    <input type="text" name="id" class="form-control">
                    @error('id')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                    @error('username')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="fullname" class="form-control">
                    @error('fullname')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" class="form-control">
                    @error('phoneNumber')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group mt-2 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">
                        Add User
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection