@extends('layouts.app') 
 
 
@section('content') 
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header text-center"> 
                    <h3>Edit Post</h3> 
                </div><!-- card-header  --> 
 
                <div class="card-body text-center"> 
                    @if ($errors->any()) 
                    <div class="alert alert-danger"> 
                        <ul> 
                            @foreach ($errors->all() as $error) 
                                <li>{{ $error }}</li> 
                            @endforeach 
                        </ul> 
                    </div> 
                @endif 
                 
                    
                <form action="{{route('posts.update',$post)}}" method="post"> 
                    @csrf 
                    @method('PUT') 
                    <input type="text" name="title" value="{{$post->title}}" placeholder="Post Title" class="form-control form-control-lg mb-3">
                    <input type="text" name="content" value="{{$post->content}}" placeholder="Post Content" class="form-control form-control-lg mb-3">  
                    <button type="submit"  class="btn btn-primary "> Update Post </button> 
                </form> 



                 
                </div><!-- card-body --> 
            </div><!--  card--> 
        </div> 
    </div> 
</div> 
@endsection