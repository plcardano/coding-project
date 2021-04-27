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
                        <p>{{ $comment->body }}</p>


                        
                        @if (count($comment->replies) > 0)

                        @foreach ($comment->replies as $reply)



                        @if ($reply->is_active == 1)
                            
                        
                        <!-- Nested Comment -->
                        
                        <div class="media">

                            <div class="row">
                                <div class="col-sm-3">
                                    <form action="{{route('createReply')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            
                                            <label for="body">Reply</label>
                                            <input type="hidden" name="comment_id" id="comment_id" value="{{$comment->id}}">
                                            <textarea name="body" id="body" cols="70" rows="1"></textarea>
                                        
                                        </div>
                        
                                        <div class="form-group">
                        
                                            <button type="submit" class="btn btn-primary">Submit</button>
                        
                                        </div>
                        
                                    </form>
                                </div>
                            </div>
                            
                            <a class="pull-left" href="#">
                                <img height="64" class="media-object" src="{{$reply->photo}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$reply->author}}
                                    <small>{{$reply->created_at->diffForHumans()}}</small>
                                </h4>
                                <p>{{$reply->body}}</p>
                            </div>

                            
                            
                            

                        </div>
                            
                        <!-- End Nested Comment -->
                        
                        @endif
                        @endforeach
                        @endif
                    </div>
                    
                </div>
                @endforeach
                @endif

               

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
