
<?php 
include("db_connection.php");
if (isset($_POST["name"])  && isset($_POST["email"]) && isset($_POST["tele"]) && isset($_POST["address"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $tele = $_POST["tele"];
  $address = $_POST["address"];
  $sql = "insert into newstudent(name, email, tele, address) values('$name', '$email', '$tele', '$address')";
  $result = mysqli_query($conn,$sql);
   header("location: index.php");
// header("letter"): Usage for redirect from home page
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <br>
  <h3 style="text-align: center;">Add new data from to database</h3>
  <div class="container">
    <form action="add.php" method="post">
     <div class="form-group">
      <label>Name</label>
      <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
      <label>Tele</label>
      <input type="text" name="tele" class="form-control">
    </div>
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" class="form-control">
    </div>
    <input type="submit" value="add" class="btn btn-primary">

  </form>
</div>
</body>
</html>



