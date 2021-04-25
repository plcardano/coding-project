@extends('layouts.admin')

@section('content')

    <h1>Edit Category</h1>

<div class="row">

        <div class="row">
                <div class="col-sm-4">
                    <form action="{{route('categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            
                            <label for="name">Category</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}">
                        
                        </div>
        
                        <div class="form-group">
        
                            <button type="submit" class="btn btn-primary col-sm-5">Update</button>
        
                        </div>
        
                    </form>

                    <div class="form-group">

                        <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger col-sm-5">Delete</button>
                    
                    
                        </form>
        
                    </div>

                </div>


            </div>

    

</div>

    
@endsection