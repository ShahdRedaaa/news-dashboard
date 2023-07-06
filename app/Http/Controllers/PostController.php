<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = post::all();
        return view('posts.index',compact('posts'));
    }

    
    public function create()
    {
        return view('posts.create')->with('categories',Category::all());
    }
    
    public function store(Request $request)
    {
       
        $this->validate($request , [ 
            "title" => "required",
            "image" => "image|mimes:png,jpg,jpeg,svg",
     ]); //validate

$image =$request->file('image');
$image_name =time().$image->getClientOriginalName(); 
$image ->move('images',$image_name);
//image

Post::create([ 
    "title" => $request->title, 
    "category_id" => $request->category_id, 
    "image" => 'images/'.$image_name, 
    "content" => $request->content, 
   ]); 

return redirect()->route('posts.index')->with('success' , 'Post Add Successfully'); 

    }

    public function show(Post $post)
    {
        //
    }

    
    public function edit(Post $post)
    {
        //
    }

    
    public function update(Request $request, Post $post)
    {
        //
    }

   
    public function destroy(Post $post)
    {
        $post->delete(); 
        return redirect()->route('posts.index')->with('success' , 'post Deleted Successfully'); 
    }
}
