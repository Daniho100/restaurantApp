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

<div>
<div class='Container' align='center' 
  style='padding-top: 50px; padding-left:-150px;'>
    <div class='row'>
        <div class='col-lg-12'>
    <table class='table table-dark table-striped' 
    cellpadding='5'>
        <tr>
            <th>Customer's Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Number of Guests</th>
            <th>Date</th>
            <th>Time</th>
            <th>Message</th>
        </tr>


@foreach($data as $data)
    <tr align='center'>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->guest}}</td> 
            <td>{{$data->date}}</td> 
            <td>{{$data->time}}</td> 
            <td>{{$data->message}}</td> 
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