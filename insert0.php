<?php 
include 'conn.php';

if(isset($_POST['submit'])){

    $name = $_POST['Name'];
    // print_r($name);exit;
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $feed = $_POST['Feed'];
    
    $sql = "INSERT INTO tp(Name,Email,Phone,Feed) VALUES  ('$name','$email','$phone','$feed')";
    // print_r($sql);exit;
    if(mysqli_query($conn, $sql)) {
        echo "New record created successfully <hr>";
    } else {
        echo "Unable to Insert Data";
    }
  }


 ?>