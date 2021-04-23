@extends('layouts.admin')

@section('content')

    <h1>Edit User</h1>

    @include('includes.form_error')

    <div class="row">
        <div class="col-sm-2">
            <img height="200" src="{{$user->photo ? $user->photo->file : "https://via.placeholder.com/200"}}" alt="" class="img-responsive img-rounded">
        </div>
            <div class="col-sm-4">
                <form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$user->name}}"
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name">

                        @error('name')
                            <div class="aler alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"
                                class="form-control" 
                                id="password">                    
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$user->email}}"
                                class="form-control" 
                                id="email">                    
                    </div>

                    <div class="form-group">
                        <label for="photo_id">Photo</label>
                        <input type="file" name="photo_id" id="photo_id" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role_id" id="role_id" class="form-control">

                            @foreach ($roles as $role)
                            <option value="{{$user->role->id}}" hidden selected>{{$user->role->name}}</option>
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>                    
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="{{$user->is_active}}" hidden selected>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</option>
                            <option value="0">Not Active</option>
                            <option value="1">Active</option>                                                        
                        </select>                    
                    </div>
    
                    <div class="form-group">
    
                        <button type="submit" class="btn btn-primary">Create User</button>
    
                    </div>
    
                </form>

            </div>
        </div>
    
@endsection