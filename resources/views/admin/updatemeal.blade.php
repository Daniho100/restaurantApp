<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
      <!-- partial:partials/_sidebar.html -->
      
@include('admin.sidebar')


      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

      <div class='container menutable'>
<div class='row'>
<div class='col-lg-9'>


@if(session()->has('message'))


  <div class="alert alert-success" data-closable>

  <button type='button' class="close-button" aria-label="Dismiss alert" data-close>
  <span aria-hidden="true">&times;</span>
      
    </button>

{{session()->get('message')}}

</div>

@endif


    <form action="{{url('update',$data->id)}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Title</label>
  <input type="text" class="form-control boxStyle" name="title" value="{{$data->title}}" required>
</div>

<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="text" class="form-control" name="price" value="{{$data->price}}" required>
</div>

<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <input type="text" class="form-control" name="description" value="{{$data->description}}" required>
</div>

<div class="input-group mb-3">
  <label for="inputGroupFile02">Old Image:</label>
  <img src="/foodimage/{{$data->image}}" alt="" style="padding-left:200px;">
</div>

<div class="input-group mb-3">
  <input type="file" class="form-control boxStyle" id="inputGroupFile02" name="image" required>
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

<button type='submit' class='btn btn-success'>SUBMIT</button>

</form>

</div>
        <!-- partial:partials/_navbar.html -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.scripts")
    <!-- End custom js for this page -->
  </body>
</html>