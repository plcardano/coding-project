@extends('layouts.blog-post')

@section('content')

    <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{$post->photo->file}}" alt="">

                <hr>

                <!-- Post Content -->
                <p>{{$post->body}}</p>
                <hr>

                @if (session('comment_message'))
                    <div class="alert alert-success">{{session('comment_message')}}</div>
                @endif

                <!-- Blog Comments -->



                @if (Auth::check())
                    
                

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    
                    <div class="row">
                            <div class="col-sm-3">
                                <form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
                                    
                                    <div class="form-group">
                                        
                                        {{-- <label for="body">Body</label> --}}
                                        <textarea name="body" id="body" cols="94" rows="3"></textarea>
                                    
                                    </div>
                    
                                    <div class="form-group">
                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                                    </div>
                    
                                </form>
                            </div>
                        </div>


                </div>

                @endif

                <hr>

                <!-- Posted Comments -->

                @if (count($comments) > 0)
                    
                    @foreach ($comments as $comment)
                        
                   

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img height="64" class="media-object" src="{{$comment->photo}}" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{ $comment->author }}
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </h4>
                        {{ $comment->body }}
                    </div>
                </div>
                @endforeach
                @endif

                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>
                        <!-- End Nested Comment -->
                    </div>
                </div>


            @section('categories-sidebar')
                
            
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                </div>

                @endsection
    
@endsection