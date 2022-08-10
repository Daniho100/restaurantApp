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

      <div class="container-fluid page-body-wrapper">

      @include('admin.sidebar')

      <div class='container menutable'>
<div class='row'>
<div class='col-lg-9'>

     
      <form action="{{url('updatefoodchef',$data->id)}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Chef Name</label>
  <input type="text" class="form-control boxStyle" name="name" value="{{$data->name}}" required>
</div>

<div class="mb-3">
  <label for="price" class="form-label">Specialty</label>
  <input type="text" class="form-control" name="price" value="{{$data->specialty}}" required>
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
</div>
</div>
</div>
        <!-- partial:partials/_navbar.html -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.scripts")
    <!-- End custom js for this page -->
  </body>
</html>