<?php  
include("db_connection.php"); //connect to database
if (isset($_GET["id"]) && !empty($_GET["id"])) { //!empty is the mean that have value
	$id = $_GET["id"];
	$sql = "select* from newstudent where id = $id";
	$result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_array($result); //it query data again and again or row again and row again
  }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Edit</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>
  	<h2>Edit Data</h2>
  	<div class="container">
  		<form action="update.php" method="post">
  			<div class="form-group">
  				<label>Name</label>
  				<input type="hidden" name="id" value="<?php echo $id; ?>">
  				<input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>">
  			</div>
  			<div class="form-group">
  				<label>Email</label>
  				<input type="text" name="email" class="form-control" value="<?php echo $row["email"]; ?>">
  			</div>
  			<div class="form-group">
  				<label>Tele</label>
  				<input type="text" name="tele" class="form-control" value="<?php echo $row["tele"]; ?>">
  			</div>
  			<div class="form-group">
  				<label>Address</label>
  				<input type="text" name="address" class="form-control" value="<?php echo $row["address"]; ?>">
  			</div>
  			<input type="submit" value="Update" class="btn btn-primary">
  		</form>
  	</body>
  	</html>