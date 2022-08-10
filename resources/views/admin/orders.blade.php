<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.admincss')
  </head>
  <body>
    
   
      <div class="container-fluid page-body-wrapper">
   <!-- partial:partials/_sidebar.html -->
      
   @include('admin.sidebar')


<!-- partial -->
<div>


<form action="{{url('search')}}" method="get" class='form-group'  style='padding-top: 50px;'>

        @csrf

    <div class="mb-3">
  <input type="text" class="form-control boxStyle" name="search" style='color:white;' required>
</div>

<button type='submit' class='btn btn-success'>SUBMIT</button>

</form>

<div class='Container' align='center' 
  style='padding-top: 50px; padding-left:-150px;'>
    <div class='row'>
        <div class='col-lg-12'>
    <table class='table table-dark table-striped' 
    cellpadding='5'>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Food Name</th>
            <th>Total Price</th>
        </tr>


@foreach($data as $data)
    <tr align='center'>
            <td>{{$data->name}}</td> 
            <td>{{$data->phone}}</td> 
            <td>{{$data->address}}</td>
            <td>${{$data->price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->foodname}}</td>
            <td>${{$data->price * $data->quantity}}</td> 
            </tr>
@endforeach

          

</table>

</div>
        <!-- partial:partials/_navbar.html -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.scripts")
    <!-- End custom js for this page -->
  </body>
</html>