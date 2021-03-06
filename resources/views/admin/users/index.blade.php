@extends('layouts.admin')

@section('content')
    

    <h1>Users</h1>

    @if (session('deleted-user'))
        <div class="alert alert-danger">{{ session('deleted-user') }}</div>
    @endif

    <div class="col-sm-10">
    <table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
          </tr>
        </thead>
        <tbody>

        @if ($users)
            
        
        @foreach ($users as $user) 
          <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : "https://via.placeholder.com/200"}}" alt=""></td>
            <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
        
        @endif
       </tbody>
    </div>
      </table>


     



@endsection