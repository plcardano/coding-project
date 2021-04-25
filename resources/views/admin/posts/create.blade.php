@extends('layouts.admin')

@section('content')

<h1>Create Post</h1>

<div class="row">
    @include('includes.form_error')
</div>

<div class="row">
        <div class="col-sm-6">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                
                </div>

                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="0">Options</option>                                                        
                    </select>                    
                </div>

                <div class="form-group">
                    
                    <label for="photo_id">Photo</label>
                    <input type="file" name="photo_id" class="form-control" id="photo_id">
                
                </div>

                <div class="form-group">
                    
                    <label for="body">Description</label>
                    <textarea name="body" id="body" rows="3" class="form-control"></textarea>
                
                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>
        </div>
    </div>




    
@endsection