<?php
include 'connect.php'; 
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
 
  <nav class="navbar justify-content-center bg-success text-light mt-5">
    <h2>PHP COMPLETE CRUD APPLICATION</h2>
  </nav>   

  <div class="container">
    <a href="add_new.php" class="btn btn-secondary my-4" >add user</a>


    <table class="table table-hover text-center">
  <thead class="table-primary text-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">first_name</th>
      <th scope="col">last_name</th>
      <th scope="col">email</th>
      <th scope="col">gender</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql = "SELECT * FROM crud3";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

    
    
    ?>
    <tr>
      
     
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['first_name']; ?></td>
      <td><?php echo $row['last_name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td> 
        <a href="edit.php?id= <?php echo $row['id']; ?>" class="link-dark"><i class="bi bi-pencil-square fs-5 me-3"></i></a> 
        <a href="delete.php?id= <?php echo $row['id']; ?>" class="link-dark"><i class="bi bi-trash3-fill fs-5"></i></a>
      </td>
    </tr> 

    <?php }} ?>
  </tbody>
</table>


  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>