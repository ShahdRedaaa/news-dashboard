@extends('layouts.app') 
@section('content') 
     


<div class="container"> 
    <div class="row justify-content-center"> 
        <div class="col-md-8"> 
            <div class="card"> 
                <div class="card-header text-center"> 
                    <h3>Add New Category</h3> 
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

                    <form action="{{ route('categories.store') }}" method="post"> 
                        @csrf 
 
                        <input type="text" name="name" placeholder="Category Name" class="form-control mb-3"> 
                        <button type="submit"  class="btn btn-primary "> Add New Category </button> 
                    </form> 
                   
                </div><!-- card-body --> 
            </div><!--  card--> 
        </div> 
    </div> 
</div> 
@endsection