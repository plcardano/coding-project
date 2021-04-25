@extends('layouts.admin')

@section('content')

<h1>Edit Post</h1>

<div class="row">
    @include('includes.form_error')
</div>

<div class="row">

    <div class="col-sm-6">

        <img src="{{$post->photo ? $post->photo->file : "https://via.placeholder.com/200"}}" alt="" class="img-responsive">


    </div>


        <div class="col-sm-6">
            <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                
                </div>

                <div class="form-group">
                        
                    <label for="category_id">Category</label>
                   
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                        
                        <option value="{{ $post->category ? $post->category->name : 'Uncategorized'}}" hidden selected disabled>{{ $post->category ? $post->category->name : 'Uncategorized'}}</option>
                        <option value="{{ $category->id}}">{{ $category->name }}</option>                                                        
                        
                        @endforeach
                    
                    </select>       
                    
                    
                </div>

                <div class="form-group">
                    
                    <label for="photo_id">Photo</label>
                    <input type="file" name="photo_id" class="form-control" id="photo_id">
                
                </div>

                <div class="form-group">
                    
                    <label for="body">Description</label>
                    <textarea name="body" id="body" rows="3" class="form-control" >{{ $post->body }}</textarea>
                
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary col-sm-5">Update</button>

                </div>

            </form>

            <div class="form-group">

                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger col-sm-5">Delete</button>
            
            
                </form>

            </div>
            

        </div>
    </div>




    
@endsection