<?php

namespace App\Http\Controllers;

use App\Mail\subscriberMail;
use App\Models\Blog;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class CommentController extends Controller
{
    public function store(Blog $blog){
       
       request()->validate(
        [
         'body'=>'required|min:10'
        ]);
        $blog->comments()->create([
         "body"=>request('body'),
         "user_id"=>auth()->id()
        ]);
  

  $subscribers=$blog->subscribers->filter(fn ($subscriber)=>$subscriber->id != auth()->id());
  $subscribers->each(function($subscriber)use($blog)
  {
   Mail::to($subscriber->email)->queue(new subscriberMail($blog));
  });

         return redirect('/blogs/'.$blog->slug);

    }
}