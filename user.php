<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $course=$_POST['course'];

    $sql = "insert into `students` (firstname,lastname,age,address,course)
    values('$firstname','$lastname','$age','$address','$course')";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Data inserted Successfully";
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Chad Liwliw - Dean Mark Lozada</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >First Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your First Name" name="firstname" autocomplete="off">
</div>


<div class="form-group">
    <label >Last Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your Last Name" name="lastname" autocomplete="off">
</div>

<div class="form-group">
    <label >Age</label>
    <input type="text" class="form-control"
    placeholder="Enter your Age" name="age" autocomplete="off">
</div>

<div class="form-group">
    <label >Address</label>
    <input type="text" class="form-control"
    placeholder="Enter your Address" name="address" autocomplete="off">
</div>

<div class="form-group">
    <label >Course</label>
    <input type="text" class="form-control"
    placeholder="Enter your Course" name="course" autocomplete="off">
</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  
  </body>
</html>
