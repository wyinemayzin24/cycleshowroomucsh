@props(['comments'])

<section class="container">
  <x-cardwarp>
  <h5 class="my-3 text-secondary">Comment({{$comments->count()}})</h5>
         @foreach($comments as $comment)
         <x-single-com :comment="$comment"/><br>
         @endforeach
   {{$comments->links()}}
  </x-cardwarp>
       
</section>
