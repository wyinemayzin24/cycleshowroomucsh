<x-layout>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto mt-4 mb-4">
      <div class="card p-4 my-4 shadow-lg">
      <form method="POST" action="">
        @csrf
        <h3 class="text-primary text-center my-2">LoginForm</h3>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input required  name="email"
    type="email" class="form-control" 
    value="{{old('email')}}"id="exampleInputEmail1" aria-describedby="emailHelp">
  <x-error name="email"/>
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input  required
    name="password" 
     type="password" class="form-control" id="exampleInputPassword1">
    <x-error name="password"/>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
        </div>
    </div>
</div>
</x-layout>