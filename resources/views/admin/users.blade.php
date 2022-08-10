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
      <div class='Container' align='center' 
  style='padding-left: 100px; padding-top: 50px;'>
    <div class='row'>
        <div class='col-lg-12'>
    <table class='table table-dark table-striped' 
    cellpadding='10'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        @foreach($data as $data)
        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>

            @if($data->usertype=="0")
            <td><a href="{{url('delete',$data->id)}}">Delete</a></td>
            @else
            <td>Not Allowed</td>
            @endif
        </tr>
      
        @endforeach

</div>
        <!-- partial:partials/_navbar.html -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.scripts")
    <!-- End custom js for this page -->
  </body>
</html>