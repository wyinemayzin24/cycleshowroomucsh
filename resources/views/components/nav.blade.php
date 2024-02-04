<nav class="navbar navbar-light border-bottom ">
      <div class="container">
        <a class="navbar-brand" href="/">Motorcycle</a>
        <div class="d-flex">
          
          <a href="/#blogs" class="nav-link">Home</a>
          @guest
          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>
          
          @else
        
        @can('admin')
        <a href="/admin/blogs" class="nav-link">DashBoard </a>
        @endcan

  <div>
    
  <img class="rounded-circle shadow-1-strong me-3"
            src="/storage/{{auth()->user()->thumbnail}}" alt="avatar" width="40"
               height="40" />
            
  </div>
          <a href="" class="nav-link">Welcome{{auth()->user()->name}} </a>
          <form action="/logout" method="POST">
            @csrf
          <button type="submit" class="nav-link btn btn-link">Logout </button>
          </form>
          @endguest


         

          
        </div>
      </div>
    </nav>