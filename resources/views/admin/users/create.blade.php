@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>

    <div class="row">
            <div class="col-sm-4">
                <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">                    
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password">                    
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation">                    
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email">                    
                    </div>
                    
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role_id" id="role_id" class="form-control">
                            <option value="1">Administrator</option>
                            <option value="2">Author</option>
                            <option value="3">Subscriber</option>
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