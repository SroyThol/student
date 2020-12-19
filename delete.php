<?php  
include("db_connection.php");
if (!empty($_GET["id"])) {
 $id = $_GET["id"];
 $name = $_GET["name"];
 $email = $_GETT["email"];
 $tele = $_GET["tele"];
 $address = $_GET["address"];
 $sql = "DELETE FROM newstudent   WHERE id = $id";
 mysqli_query($conn, $sql);

 header("location: index.php");
// header("letter"): Usage for redirect from home page
}
?>
