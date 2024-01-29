<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
      return view('auth.register');
    }

    
    
public function store(){
         
        
        $formData  = request() ->validate([
            'name'=>'required|max:255|min:3',
            'username'=>['required','max:255','min:3',Rule::unique('users','username')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:8',
           ]) ;
          
          
    $user=User::create($formData);
    auth()->login($user);
    return redirect('/')->with('success','Welcome Dear'.$user->name);
   }



   public function logout(){
    auth()->logout();
    return redirect('/')->with('success','Good Bye');
   }



   public function login(){
   return view('auth.login');
   }

   
   public function post_login(){
   $Data = request()->validate([
      'email'=>['required','email',Rule::exists('users','email')],
      'password'=>'required'
    ],[
      'email.required'=>'We need your email address'
      
    ]);
    if(auth()->attempt($Data)){
      if(auth()->user()->is_admin){
        return redirect('/admin/blogs');
      }
    else{
      return redirect('/')->with('success','Welcome Back');
    }
    }else{

      return redirect()->back()->withErrors([
       'email'=>'User Credential is wrong'
      ]);
    }

    

   }
  
  }