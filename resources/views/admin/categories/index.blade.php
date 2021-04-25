@extends('layouts.admin')

@section('content')

    <h1>Categories</h1>


    <div class="row">

        <div class="col-sm-6">
            <div class="row">
                    <div class="col-sm-6">
                        <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                
                                <label for="name">Category</label>
                                <input type="text" name="name" class="form-control" id="name">
                            
                            </div>
            
                            <div class="form-group">
            
                                <button type="submit" class="btn btn-primary">Create Category</button>
            
                            </div>
            
                        </form>
                    </div>
                </div>

        </div>



        <div class="col-sm-6">

            @if ($categories)                
           
            <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Created at</th>
                      </tr>
                    </thead>    
            
            <tbody>

            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{route('categories.edit', $category->id)}}">{{ $category->name }}</a></td>
                <td>{{ $category->created_at ?  $category->created_at->diffForHumans() : 'Not available' }}</td>

            </tr>

            @endforeach
            </tbody>
            </table>

            @endif
        </div>
    
    </div>



@endsection