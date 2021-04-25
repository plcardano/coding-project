@extends('layouts.admin')


@section('styles')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">


@endsection


@section('content')

<h1>Upload Media</h1>

        <div class="col-sm-6"> 
                    <form action="{{route('media.store')}}" method="post" enctype="multipart/form-data" class="dropzone">
                        @csrf
                        
        
                    </form>
        </div>       

    
@endsection



@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    
@endsection