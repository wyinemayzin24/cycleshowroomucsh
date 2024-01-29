@props(['blog'])
<x-cardwarp >
     <form action="/blogs/{{$blog->slug}}/comments" method="post">
      @csrf
       <div class="mb-3">
   
        <textarea 
        required
        name="body" cols="10" 
   class="form-control border border-0 " rows="5" 
   placeholder="Say Somethings">
    </textarea>
 <x-error name="body"></x-error>
  <div class="d-flex justify-content-end ">
  <button type="submit" class="mt-2   btn btn-primary">Submit</button>
  </div>
</form>
      </div>
     </x-cardwarp>

