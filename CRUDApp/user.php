<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO crud (name,email,mobile,password)
    VALUES('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data inserted successfully";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD Operation</title>
</head>

<body>
    <div class="p-5 mb-5 bg-dark">
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Your Email Address" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Your Mobile Number" name="mobile" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your Password" name="password" autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>