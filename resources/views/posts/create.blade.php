@extends('layouts.app') 
 
 
@section('content') 
<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header text-center"> 
                    <h3>Add New Post</h3> 
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
                 
                    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data"> 
                        @csrf 
 
                        <input type="text" name="title" placeholder="Post Title" class="form-control form-control-lg mb-3"> 
                        <select name="category_id" class="form-select form-select-lg mb-3"> 
                            <option>Category</option> 
 @foreach ($categories as $category)
     <option value="{{$category->id}}" >{{$category->name}}</option> 
 @endforeach
 
                        </select> 
 
                        <input type="file" name="image"  class="form-control form-control-lg mb-3"> 
                        <textarea type="file" name="content"  placeholder="Post Content"  class="form-control form-control-lg mb-3"></textarea> 
                        <button type="submit"  class="btn btn-primary "> Add New Post </button> 
                    </form> 
                   
                </div><!-- card-body --> 
            </div><!--  card--> 
        </div> 
    </div> 
</div> 
@endsection