@extends('layouts.app')
@section('content')
    

<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header text-center"> 
                    <h3>All posts</h3> 
                </div><!-- card-header  --> 
 
                <div class="card-body text-center"> 
                   
@if (session('success'))
    <div class="alert alert-success py-3 text-bold text-center">
        <h2>{{session('success')}}</h2>
    </div>
@endif

                 <table class="table table-bordered">

<thead>
    <tr>
        <th>#ID</th>
        <th>Post Title</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
</thead>

<tbody>
    @php ($i=1)
    @foreach ($posts as $post)
   
    <tr>
        <td>{{$i++}}</td>
        <td>{{$post->title}}</td>
        <td><img src="{{$post->image}}" height="50"></td>
    
        <td><a class="btn btn-dark" href="{{ route('posts.edit',$post) }}"><i class="fa fa-solid fa-edit"></i></a></td>
        <td>
            <form action="{{ route('posts.destroy',$post) }}" method="post">
                @csrf
                @method('DELETE')
                <button  class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </form>
        </td>





</tr>
    

    @endforeach


</tbody>


                   </table>

                </div><!-- card-body --> 
            </div><!--  card--> 
        </div> 
    </div> 
</div> 

@endsection