<section class="container text-center" id="blogs">
      <h1 class="display-5 fw-bold mb-4">Motorcycle</h1>
      <div class="">
     
      <x-category-dropdown/>
      
 
      </div>
      <form action=""
      method="GET" class="my-3">
        <div class="input-group mb-3">
         @if(request('category'))
        <input
           name="category"
            type="hidden"
            value="{{request('category')}}"
            />
         @endif

         @if(request('username'))
        <input
           name="username"
            type="hidden"
            value="{{request('username')}}"
            />
         @endif
          <input
           name="search"
            type="text"
            value="{{request('search')}}"
            autocomplete="false"
            class="form-control"
            placeholder="Search Blogs..."
          />
          <button
            class="input-group-text bg-primary text-light"
            id="basic-addon2"
            type="submit"
          >
            Search
          </button>
        </div>
      </form>
      <div class="row">
        
        @forelse($blogs as $blog)
        <div class="col-md-4 mb-4">
          <x-blogcard :blog='$blog'/>
        </div>
        @empty 
        <p class="text-center"> Not found</p>
        @endforelse
        {{$blogs->links()}}
      </div>
</section>
       