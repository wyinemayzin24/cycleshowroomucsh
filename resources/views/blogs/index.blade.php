


<x-layout>
@if(session('success'))
<div class="alert alert-success text-center">{{session('success')}} </div>
@endif
<x-hero/>

<x-section :blogs='$blogs'/>
    

 
</x-layout>