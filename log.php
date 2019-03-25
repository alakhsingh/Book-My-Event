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
  $result = mysqli_query($con,"Select * from users");
    while($row=mysqli_fetch_row($result))
    {
        if($row[0] == $name && $row[1] == $password)
        {
          $flag = 1;
          header("Location:index.php");
          break;
        }
    }
    if($flag == 0){
          echo "<script>alert('Invalid credentials');location='login.php';</script>";
    } else{
        $response["success"] = "1";
        $response["message"] = "user successfully logged in";
        echo json_encode($response);
        
    }
    // else
    // {
    //     header('Location:i.html');
    // }
    

?>