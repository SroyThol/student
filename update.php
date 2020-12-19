<?php  
  include("db_connection.php");
  if (!empty($_POST["id"])) {
     $id = $_POST["id"];
     $name = $_POST["name"];
     $email = $_POST["email"];
     $tele = $_POST["tele"];
     $address = $_POST["address"];
     $sql = "update newstudent set name = '$name', email = '$email' , tele = '$tele' , address ='$address' where id = $id";
     mysqli_query($conn, $sql);

     header("location: index.php"); // header("letter"): Usage for redirect from home page
  }
?>