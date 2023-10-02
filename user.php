<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud DEMO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">

    <form method="post">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name Here" name="name" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter Email Here" name="email" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="number" class="form-control" placeholder="Enter Mobile Here" name="mobile" autocomplete="off">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password Here" name="password" autocomplete="off">
      </div>


      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>


</body>

</html>


<?php
include 'conntect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `crud`( `name`, `email`, `mobile`, `password`) 
  VALUES ('$name','$email','$mobile','$password')";

  $result = mysqli_query($con, $sql);

  if ($result) {
    // echo "Data Sucessfully Added";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}
?>