<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss')
  </head>
  <body>
    
      <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      
@include('admin.sidebar')


<!-- partial -->

      <div class='container menutable'  style='padding-left: 50px; padding-right:150px;'>
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


    <form action="{{url('uploadfood')}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Title</label>
  <input type="text" class="form-control boxStyle" name="title" placeholder="Write title" required>
</div>

<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="text" class="form-control" name="price" placeholder="Write food price" required>
</div>

<div class="input-group mb-3">
  <input type="file" class="form-control boxStyle" id="inputGroupFile02" name="image" required>
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <input type="text" class="form-control" name="description" placeholder="food description" required>
</div>
<button type='submit' class='btn btn-success'>SUBMIT</button>

</form>

<div>
<div class='Container' align='center' 
  style='padding-top: 50px; padding-bottom:50px;'>
    <div class='row'>
        <div class='col-lg-12'>
    <table class='table table-dark table-striped' 
    cellpadding='10'>
        <tr>
            <th>Food Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>
        </tr>


@foreach($data as $data)
    <tr align='center'>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img src='/foodimage/{{$data->image}}'></td>  
            <td><a href="{{url('deletefood',$data->id)}}"><button class='btn btn-danger'>Delete</button></a></td>
            <td><a href="{{url('updatefood',$data->id)}}"><button class='btn btn-success'>Update</button></a></td> 
</tr>
@endforeach

          

</table>
</div>

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