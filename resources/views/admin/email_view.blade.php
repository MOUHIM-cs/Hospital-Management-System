<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    <style type='text/css'>
         label {
            display: inline-block;
            width: 200px;
         }


    </style>

     @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

        <!-- partial -->    

     @include('admin.navbar')

     <div class="container-fluid page-body-wrapper">

        <div class='container' align="center" style="padding-top: 100px;">

        @if(Session::has('message'))

<div class='alert alert-success'>

   <button type='button' class='close' data-dismiss='alert'>x</button>
   {{Session::get('message')}}
</div>
@endif
           
        <form action='{{url("sendemail",$data->id)}}' method='POST'>

            @csrf

<div style="padding-top: 15px;">

    <label>Greeting</label>
    <input type='text' style='color:black;' name='Greeting' placeholder='Write the name' required="">

</div>



<div style="padding-top: 15px;">

    <label>Body</label>
    <input type='text' style='color:black;' name='body' required="">

</div>


<div style="padding-top: 15px;">

    <label>Action Text</label>
    <input type='text' style='color:black;' name='actiontext' required="">

</div>

<div style="padding-top: 15px;">

    <label>Action Url</label>
    <input type='text' style='color:black;' name='actionurl' required="">

</div>

<div style="padding-top: 15px;">

    <label>End Part</label>
    <input type='text' style='color:black;' name='endpart' required="">

</div>


<div style="padding-top: 15px;">

    <input type='submit' class='btn btn-success' >

</div>
                </form>


</div>
           
</div>

        <!-- partial -->
       

    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>