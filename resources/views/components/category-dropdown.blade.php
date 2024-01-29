<div class="dropdown">
  <button class="btn btn-outline dropdown-toggle fs-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   {{isset($currentCategory)? $currentCategory->name:'FilleredByModel'}}
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
   
  <li>
    <a class="dropdown-item" href="/"
    >All</a>
  </li>  
   @foreach($categories as $category)
   <li>
    <a class="dropdown-item fs-5" href="/?category={{$category->slug}}
    {{request('search')?'&search='.request('search') :''}}
    {{request('username')?'&search='.request('username') :''}}"
    >{{$category->name}}</a>
  </li>  
  
   @endforeach
   </ul>
</div>