<?php
include 'connect.php';

if (isset($_POST['submit'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO crud3 (id,first_name,last_name,email,gender) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header('location:index.php');
  } else {
    echo "doesn't insert";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud application</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar justify-content-center bg-dark text-light mt-5">
    PHP COMPLETE CRUD APPLICATION
  </nav>
  <div class="container mt-4">
    <div class="text-center">
      <h3>add user</h3>
      <p class="text-muted"> fill the form to add user</p>
    </div>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width: 50vw; min-width:300px">
        <div class="row">
          <div class="col">
            <label for="" class="form-label">first_name</label>
            <input type="text" class="form-control" name="first_name" placeholder="first_name">
          </div>

          <div class="col">
            <label for="" class="form-label">last_name</label>
            <input type="text" class="form-control" name="last_name" placeholder="last_name">
          </div>
          <div>
            <label for="" class="form-label">email</label>
            <input type="text" class="form-control" name="email" placeholder="xyz@gmail.com">
          </div>
        </div>
        <div class="form-group mt-5">
          <label for="gender">gender:</label> &nbsp;
          <input type="radio" id="male" value="male" class="form-check-input" name="gender">
          <label for="male" class="form-input-lable">male</label>
          &nbsp;
          <input type="radio" id="female" value="female" class="form-check-input" name="gender">
          <label for="male" class="form-input-lable">female</label>
        </div>
        <div class="mt-5">
        <button class="btn btn-primary" type="submit" name="submit" >Save</button>
          
          <a href="index.php" class="btn btn-danger">cancel</a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>