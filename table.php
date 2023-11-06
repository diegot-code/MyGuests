<!-- Table displaying Guests -->
<br><br>
<table class="table table-hover table-striped">
<tr>
<th>ID</th>
<th>First</th>
<th>Last</th>
<th>Email</th>
<th>Reg Date</th>
<th></th>
<th></th>
</tr>

<!-- FTP details -->

<?php

include 'db.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
?>


<!-- Format for the Table info -->

<tr>
<td><?=$row['id']?></td>
<td><?=$row['firstname']?></td>
<td><?=$row['lastname']?></td>
<td><?=$row['email']?></td>
<td><?=$row['reg_date']?></td>
<td>

<form action="index.php" method="POST">
  <input type="hidden" name="id" value="<?=$row['id']?>">
  <input type="hidden" name="firstname" value="<?=$row['firstname']?>">
  <input type="hidden" name="lastname" value="<?=$row['lastname']?>">
  <input type="hidden" name="email" value="<?=$row['email']?>">
<button type="submit" name="editGuest" class="btn btn-success btn-xs">Edit</button>
</form>

</td>

<td>
<form action="functions.php" method="POST">
  <input type="hidden" name="id" value="<?=$row['id']?>">
<button type="submit" name="deleteGuest" class="btn btn-danger btn-xs">X</button>
</form>
</td>
</tr>

<?php
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</table>