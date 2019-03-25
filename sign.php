<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="book_my_event";
  $response = array();
  $flag = 0;
  $con = mysqli_connect($servername,$username,$password,$dbname);
  $name = $_POST['username'];
  $password = md5($_POST['password']);
  $email = $_POST['email'];
  $result = 0;
  $sql="INSERT INTO `users` (`username`, `password`, `email`) VALUES ('$name','$password','$email')";
  $result = mysqli_query($con,$sql);
    if($result){
          $response["success"] = "1";
          $response["message"] = "User registered";
          echo json_encode($response);
          header('Location:login.php');
    }else{
        echo "<script>alert('User already registered!');location='signup.php';</script>";
    }

?>