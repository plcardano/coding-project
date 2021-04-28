@extends('layouts.admin')

@section('content')

<h1>Media</h1>

@if ($photos)
    
<div class="row">
        <div class="col-sm-10">
            <form action="{{route('deleteMedia')}}" method="post" enctype="multipart/form-data" class="form-inline">
                @csrf
                @method('DELETE')
                <div class="form-group">

                    <select name="checkBoxArray" id="" class="form-control">

                        <option value="delete">Delete</option>

                    </select>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

           

<table class="table">
        <thead>
          <tr>
             <th><input type="checkbox" name="options" id="options"></th> 
            <th>Id</th>
            <th>Name</th>
            <th>Created at</th>
           
          </tr>
        </thead>   

        <tbody>
            @foreach ($photos as $photo)
               
            <tr>
                <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$photo->id}}"></td>
                <td>{{ $photo->id }}</td>
                <td><img height="50" src="{{$photo->file}}" alt=""></td>
                <td>{{ $photo->created_at ? $photo->created_at->diffForHumans() : 'Not available' }}</td>
               
            </tr>         

            @endforeach

        </tbody>



</table>

</form>
</div>
</div>


@endif



@endsection

@section('scripts1')

    <script>

        $(document).ready(function(){

            $('#options').click(function(){

               if(this.checked){

                    $('.checkBoxes').each(function(){

                        this.checked = true;

                    });

               }elese{

                $('.checkBoxes').each(function(){

                        this.checked = false;

                        });


                    }

            });

        });


    </script>
    
@endsection