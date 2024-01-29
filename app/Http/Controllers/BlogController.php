<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
  
    return view('blogs.index',[
     
    'blogs'=>Blog::latest()->
    filter(request(['search','category','username']))
    ->paginate(3)
    ->withQueryString()
   
    
]);
}
 public  function show(Blog $blog) {
   
    return view('blogs.show',['blog'=>$blog,
    'ramdomBlogs'=>Blog::inRandomOrder()->take(2)->get()]
    
   );
}
   public function subscriptionHandler(Blog $blog){
    if(User::find(auth()->id())->isSubscribed($blog)){
    $blog->unSubscribe();
    return redirect()->back();
    
  }else{
    $blog->subscribe();
    return redirect()->back();
    }
   }


 



  }  // return $query->get();
 

// if(request('search')){
//     $blogs=$blogs->where('title','LIKE','%'.request('search').'%')
//                  ->where('body','LIKE','%'.request('search').'%');

// }