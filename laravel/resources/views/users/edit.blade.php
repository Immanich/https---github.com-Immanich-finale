@extends('welcome.base')

@section('content')
<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteUserModalLabel">
                    Delete User - {{$user->id}} ?
                </h1>
                <button class="btn-close" type="button"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('user/delete/' . $user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this User?
            </div>
            <div class="modal-footer">
                <button  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-danger">Delete User</button>
            </div>
            </form>
        </div>
    </div>
</div>

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