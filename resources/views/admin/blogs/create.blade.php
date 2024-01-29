

<x-admin-layout>

<h1 class="my-3 text-center">Create New Cycle </h1>
<div class=" ">
    
        <x-cardwarp>
            <form 
            enctype="multipart/form-data"
            action="/admin/blogs/store" method="post">
                @csrf
            <div class="mb-3">

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="intro"/>
            <x-form.input name="price"/>
            <x-form.textaera name="body"/>
            
            <x-form.input name="thumbnail" type="file"/>


    

  
   
  
    
  
  <x-form.input-wrapper>
  <x-form.label name="category"/>
    <select name="category_id" id="category" class="form-control">
         @foreach($categories as $category)
         <option {{$category->id==old('category_id')? 'selected':''}}
             value="{{$category->id}}">
          {{$category->name}}
         </option>
         @endforeach
    </select>
    <x-error name="category_id"/>
  </x-form.input-wrapper>
<div class="d-flex justify-content-start mt-3">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
 </form>
 </x-cardwarp>
    
</div>
</x-admin-layout>