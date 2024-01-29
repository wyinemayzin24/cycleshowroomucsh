@props(['comment'])
       
<x-cardwarp>
<div class="d-flex ">
              <img class="rounded-circle shadow-1-strong me-3"
                src="{{$comment->author->avator}}" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold text-primary mb-1">{{$comment->author->name}}</h6>
                <p class="text-muted small mb-0">
                 {{$comment->created_at->format('F j,Y,g:i a')}}
                </p>
              </div>
            </div>

            <p class="mt-3 mb-4 pb-2">
             {{$comment->body}}
            </p>

</x-cardwarp>
            
         
    