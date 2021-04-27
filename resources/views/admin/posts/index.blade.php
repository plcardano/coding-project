@extends('layouts.admin')

@section('content')

<h1>Posts</h1>

<div class="row">

    <div class="col-sm-10">
        <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Photo</th>
                    <th>Owner</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Post</th>
                    <th>Comments</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                  </tr>
                </thead>

                <tbody>

                @if ($posts)
                    
                
                    @foreach ($posts as $post)     
                <tr>
                                
                    <td>{{ $post->id }}</td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : "https://via.placeholder.com/200"}}" alt=""></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category ? $post->category->name : 'Uncategorized'}}</td>
                    <td><a href="{{route('posts.edit', $post->id)}}">{{ $post->title }}</a></td>
                    <td>{{ Str::limit($post->body, 10) }}</td>
                    <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                    <td><a href="{{route('comments.show', $post->id)}}">View Comments</a></td>
                    <td>{{ $post->created_at->diffForHumans() }}</td>
                    <td>{{ $post->updated_at->diffForHumans() }}</td>
                   
                </tr>

                    @endforeach

                @endif
                </tbody>
        </table>
    </div>

</div>




    
@endsection