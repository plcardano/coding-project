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

                <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://coding-test-1.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                    <script id="dsq-count-scr" src="//coding-test-1.disqus.com/count.js" async></script>
            
                {{-- @if (session('comment_message')) --}}
                    {{-- <div class="alert alert-success">{{session('comment_message')}}</div> --}}
                {{-- @endif --}}

                <!-- Blog Comments -->



                {{-- @if (Auth::check()) --}}
                    
                

                <!-- Comments Form -->
                {{-- <div class="well"> --}}
                    {{-- <h4>Leave a Comment:</h4> --}}
                    
                    {{-- <div class="row"> --}}
                            {{-- <div class="col-sm-3"> --}}
                                {{-- <form action="{{route('comments.store')}}" method="post" enctype="multipart/form-data"> --}}
                                    {{-- @csrf --}}

                                    {{-- <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}"> --}}
                                    
                                    {{-- <div class="form-group"> --}}
                                        
                                        {{-- <label for="body">Body</label> --}}
                                        {{-- <textarea name="body" id="body" cols="94" rows="3"></textarea> --}}
                                    
                                    {{-- </div> --}}
                    
                                    {{-- <div class="form-group"> --}}
                    
                                        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                    
                                    {{-- </div> --}}
                    
                                {{-- </form> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}


                {{-- </div> --}}

                {{-- @endif --}}

                {{-- <hr> --}}

                <!-- Posted Comments -->

                {{-- @if (count($comments) > 0) --}}
                    
                    {{-- @foreach ($comments as $comment) --}}
                        
                   

                <!-- Comment -->
                {{-- <div class="media"> --}}
                    {{-- <a class="pull-left" href="#"> --}}
                        {{-- <img height="64" class="media-object" src="{{$comment->photo}}" alt=""> --}}
                    {{-- </a> --}}
                    {{-- <div class="media-body"> --}}
                        {{-- <h4 class="media-heading">{{ $comment->author }} --}}
                            {{-- <small>{{ $comment->created_at->diffForHumans() }}</small> --}}
                        {{-- </h4> --}}
                        {{-- <p>{{ $comment->body }}</p> --}}


                        
                        {{-- @if (count($comment->replies) > 0) --}}

                        {{-- @foreach ($comment->replies as $reply) --}}



                        {{-- @if ($reply->is_active == 1) --}}
                            
                        
                        <!-- Nested Comment -->
                        
                        {{-- <div class="media"> --}}

                            {{-- <div class="row"> --}}
                                {{-- <div class="col-sm-3"> --}}
                                    {{-- <form action="{{route('createReply')}}" method="post" enctype="multipart/form-data"> --}}
                                        {{-- @csrf --}}
                                        {{-- <div class="form-group"> --}}
                                            
                                            {{-- <label for="body">Reply</label> --}}
                                            {{-- <input type="hidden" name="comment_id" id="comment_id" value="{{$comment->id}}"> --}}
                                            {{-- <textarea name="body" id="body" cols="70" rows="1"></textarea> --}}
                                        
                                        {{-- </div> --}}
                        
                                        {{-- <div class="form-group"> --}}
                        
                                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                        
                                        {{-- </div> --}}
                        
                                    {{-- </form> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}
                            
                            {{-- <a class="pull-left" href="#"> --}}
                                {{-- <img height="64" class="media-object" src="{{$reply->photo}}" alt=""> --}}
                            {{-- </a> --}}
                            {{-- <div class="media-body"> --}}
                                {{-- <h4 class="media-heading">{{$reply->author}} --}}
                                    {{-- <small>{{$reply->created_at->diffForHumans()}}</small> --}}
                               {{-- </h4> --}}
      {{-- /                          <p>{{$reply->body}}</p> --}}
                            {{-- </div> --}}

                            
                            
                            

                        {{-- </div> --}}
                            
                        <!-- End Nested Comment -->
                        
                        {{-- @endif --}}
                        {{-- @endforeach --}}
                        {{-- @endif --}}
                    {{-- </div> --}}
                    
                {{-- </div> --}}
                {{-- @endforeach --}}
                {{-- @endif --}}

               

            {{-- @section('categories-sidebar')
                
            
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

                @endsection --}}
    
@endsection
