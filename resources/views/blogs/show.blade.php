<x-layout>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto text-center">
          <img
            src="/storage/{{$blog->thumbnail}}"
            class="card-img-top"
            alt="..."
          />
          <h3 class="my-3">{{$blog->title}}</h3>
           
           <div>
            <div><h4>Author -{{$blog->author->name}} </h4></div>
            
            <div>  <h5><div class="btn btn-outline-primary">
          {{$blog->category->name}}
          </div></h5></div>
          </div>
          <p class="lh-md">
         
         <p class=" text-start"> {{$blog->body}}
        <div class="row">
          <div class="col-md-4">
         
          </div>
          <div  class="col-md-4">
         <h5> <div class="btn btn-outline-success mb-3 "><h5>Price - {{$blog->price}}</h5> </div></h5>
              
              <div class="col-md-4">
          </div>
          <div></div>
        </div>
         </p>
         
          </p>
           
          <div><h5>Created - {{$blog->created_at->diffForHumans()}}</h5> </div>
          
        <!-- <form action="/blogs/{{$blog->slug}}/subscription" 
        method="POST"
        >
        @csrf
        @auth
        @if(auth()->user()->isSubscribed($blog))
          <button class="btn btn-danger"> unscribed</button>
          @else
          <button class="btn btn-warning"> scribed</button>
           @endif


        @endauth -->

        <!-- </form> -->

       
         
          
          </div>
        </div>
    
      </div>
    </div>
    <section class="container">
     
    @auth
    <div class="row">
      <div class="col-md-5"></div>
      <div class="col-md-4">
      <div class="d-flex justify-center ">
          <input type="number" value="1" min="1"
          class="form-control " style="width:100px" name="">
        
          <a href="" class=" btn btn-warning mx-4">ADD to card</a>
         </div>
      </div>

    </div>
    <x-comment-form :blog="$blog"/>
   
     @else
     <p class="text-center">Please <a href="/login">login</a> to cmt</p>
     
    @endauth
      
    
    </section>
    <!--comment-->
    @if($blog->comments->count())
    <x-com :comments="$blog->comments()->latest()->paginate(4)"/>
    @endif
    
    
    <!-- footer -->
   <x-ramdom :ramdomBlogs='$ramdomBlogs'/>
   
</x-layout>