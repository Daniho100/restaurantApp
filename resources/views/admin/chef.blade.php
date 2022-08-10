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


    <form action="{{url('uploadchef')}}" method="POST" 
    enctype="multipart/form-data" class='form-group'>

        @csrf

    <div class="mb-3">
  <label for="name" class="form-label">Chef Name</label>
  <input type="text" style="color: white;" class="form-control boxStyle" name="name" placeholder="Input Chef name" required>
</div>

<div class="mb-3">
  <label for="specialty" class="form-label">Specialty</label>
  <input type="text" style="color: white;" class="form-control" name="specialty" placeholder="Input Chef specialty" required>
</div>

<div class="input-group mb-3">
  <input type="file" class="form-control boxStyle" id="inputGroupFile02" name="image" required>
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

<button type='submit' class='btn btn-success'>SUBMIT</button>

</form>

<div class='Container' align='center' 
  style='padding-top: 50px;'>
    <div class='row'>
        <div class='col-lg-12'>
    <table class='table table-dark table-striped' 
    cellpadding='5'>
        <tr>
            <th>Chef Name</th>
            <th>Specialty</th>
            <th>Image</th>
            <th>Action</th>
            <th>Action</th>
        </tr>


@foreach($data as $data)
    <tr align='center'>
            <td>{{$data->name}}</td>
            <td>{{$data->specialty}}</td>
            <td><img src="chefimage/{{$data->image}}" alt='chef images'></td> 
            <td><a href="{{url('updatechef',$data->id)}}"><button class='btn btn-primary'>Update</button></a></td> 
            <td><a href="{{url('deletechef',$data->id)}}"><button class='btn btn-danger'>Delete</button></a></td> 
            </tr>
@endforeach

          

</table>


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