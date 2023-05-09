<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chad Liwliw - Dean Mark Lozada</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">New Student</a>
        
           </button>
           <table class="table">
  <thead>
    <tr>
      <th scope="col" style="display:none;">ID</th> 
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Age</th>
      <th scope="col">Address</th>
      <th scope="col">Course</th>
      <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `students`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $age=$row['age'];
        $address=$row['address'];
        $course=$row['course'];
        echo '<tr>
        <th style="display:none;">ID</th>
        <td>'.$firstname.'</td>
        <td>'.$lastname.'</td>
        <td>'.$age.'</td>
        <td>'.$address.'</td>
        <td>'.$course.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php?
        updateid='.$id.'"class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php?
        deleteid='.$id.'"class="text-light">Delete</a></button>
      </td>
      </tr>';

        }

    }
    ?>

  </tbody>
</table>
    </div>
    
</body>
</html>