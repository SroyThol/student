<?php 
include("db_connection.php");
$sql = "select* from newstudent";
$result = mysqli_query($conn, $sql);
?>

<title>PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
  <table class="table table-hover" border="2">
    <thead>
      <a href="add.php"> 
        <button class="btn btn-primary">add new</button>
      </a>
      <tr style="background-color: lightgreen;">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Tele</th>
        <th>Address</th>
        <th>Option</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = mysqli_fetch_assoc($result)) {
        echo"<tr>";
        echo"<td>".$row["id"]."</td>";
        echo"<td>".$row["name"]."</td>";
        echo"<td>".$row["email"]."</td>";
        echo"<td>".$row["tele"]."</td>";
        echo"<td>".$row["address"]."</td>";
        echo"<td><a href='edit.php?id=".$row["id"]."' ><button​​ class='btn btn-warning'>edit</button></a></td>";
        echo"<td><a href='delete.php?id=".$row["id"]."' ><button​​ class='btn btn-warning'>delete</button></a></td>";
        echo"</tr>";
      }
      ?>
    </tbody>
  </table>
</div>