@extends('layouts.admin')


@section('content')



@if (count($comments) > 0)

<h1>Comments</h1>
    
    <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Comment</th>
                <th>Post</th>


              </tr>
            </thead>    

            <tbody>

                @foreach ($comments as $comment)

                <td>{{ $comment->id }}</td>
                <td>{{ $comment->author }}</td>
                <td>{{ $comment->email }}</td>
                <td>{{ $comment->body }}</td>
                <td><a href="{{ route('home.post', $comment->post->id)}}">View Post</a></td>

                <td>
                    {{-- @if ($comment->is_active == 1)
                        
                        <div class="row">
                                <div class="col-sm-3">
                                    <form action="{{route('comments.update', $comment->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        
                                        <input type="hidden" name="is_active" value="0">

                                        <div class="form-group">
                        
                                            <button type="submit" class="btn btn-primary">Unapprove</button>
                        
                                        </div>
                                    </form>

                                    @else

                                    <form action="{{route('comments.update', $comment->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        
                                        <input type="hidden" name="is_active" value="1">

                                        <div class="form-group">
                        
                                            <button type="submit" class="btn btn-success">Approve</button>
                        
                                        </div>
                                    </form>
                                    @endif
                                </div>
                            </div>
                         --}}

                     @if($comment->is_active == 1)


                    {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}


                      <input type="hidden" name="is_active" value="0">


                           <div class="form-group">
                    {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                           </div>
                    {!! Form::close() !!}


                      @else



                    {!! Form::open(['method'=>'PATCH', 'action'=> ['PostCommentsController@update', $comment->id]]) !!}


                      <input type="hidden" name="is_active" value="1">


                      <div class="form-group">
                         
                    {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                      </div>
                    {!! Form::close() !!}




                  @endif
                    

                </td>

                <td>
                    {{-- <form action="{{route('comments.destroy', $comment->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        

                        <div class="form-group">
        
                            <button type="submit" class="btn btn-danger">Delete</button>
        
                        </div> --}}

                    {!! Form::open(['method'=>'DELETE', 'action'=> ['PostCommentsController@destroy', $comment->id]]) !!}


                    <div class="form-group">
                    {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}


                </td>


            </tbody>
            @endforeach
          
    </table>
    

    @else

        <h1 class="text-center">No Comment Available</h1>

    @endif
    
@endsection