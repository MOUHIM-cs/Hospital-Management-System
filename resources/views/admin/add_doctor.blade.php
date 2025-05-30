<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
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
           
        <form action='{{url("upload_doctor")}}' method='POST' enctype='multipart/form-data'>

            @csrf

            <div style="padding-top: 15px;">

                <label>Doctor ID</label>
                <input type='text' style='color:black;' name='id' placeholder='Write the id' required="">

            </div>

<div style="padding-top: 15px;">

    <label>Doctor Name</label>
    <input type='text' style='color:black;' name='name' placeholder='Write the name' required="">

</div>



<div style="padding-top: 15px;">

    <label>Phone</label>
    <input type='number' style='color:black;' name='number' placeholder='Write the number' required="">

</div>


<div style="padding-top: 15px;">

    <label>Speciality</label>

    <select name='speciality' style="color:black; width: 200px;">
        <option>--Select--</option>
        <option value='Gynecology'>Gynecology</option>
        <option value='Cardiology'>Cardiology</option>
        <option value='Dermatology'>Dermatology </option>
        <option value='Pediatrics'>Pediatrics </option>
        <option value='Ophthalmology'>Ophthalmology  </option>

        

    </select>

</div>


<div style="padding-top: 15px;">

    <label>Room no</label>
    <input type='text' style='color:black;' name='room' placeholder='Write the room number' required="">

</div>


<div style="padding-top: 15px;">

    <label>Doctor Image</label>
    <input type='file' name='file' required="">

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