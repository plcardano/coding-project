@extends('layouts.admin')

@section('content')

<h1>Media</h1>

@if ($photos)
    


<table class="table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created at</th>
            <th>Delete</th>
          </tr>
        </thead>   

        <tbody>
            @foreach ($photos as $photo)
               
            <tr>
                <td>{{ $photo->id }}</td>
                <td><img height="50" src="{{$photo->file}}" alt=""></td>
                <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'Not available' }}</td>
                <td>
                    <div class="row">
                            <div class="col-sm-3">
                                <form action="{{route('media.destroy', $photo->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <div class="form-group">                                    
                                                     
                                        <button type="submit" class="btn btn-danger">Delete</button>
                    
                                    </div>
                    
                                </form>
                            </div>
                        </div>



                </td>

            </tr>         

            @endforeach

        </tbody>



</table>


@endif

@endsection