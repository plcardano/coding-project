@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    @include('includes.form_error')

    <div class="row">
            <div class="col-sm-4">
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" 
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
                        <input type="email" name="email" 
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
                            <option value="" hidden selected disabled>Choose option</option>
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>                    
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="is_active" id="is_active" class="form-control">
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