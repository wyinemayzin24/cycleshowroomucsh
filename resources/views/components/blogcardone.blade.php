<div class="card">
            <img
              src="/storage/{{$blog->thumbnail}}"
              alt="..."
            />
            <div class="card-body">
              <h3 class="card-title">{{$blog->title}}</h3>
              <p class="fs-6 text-secondary">
               
              
              </p>
            
              <p class="card-text">
                {{$blog->intro}}
              </p>
              <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
            </div>
          </div>