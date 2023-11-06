<?php
session_start();


include 'db.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Add a Guest
if (isset($_POST['addGuest'])){
  $firstname = ucfirst(strtolower($_POST['firstname']));
  $lastname = ucfirst(strtolower($_POST['lastname']));
  $email = strtolower($_POST['email']);
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('{$firstname}', '{$lastname}', '{$email}')";

if (mysqli_query($conn, $sql)) {
$_SESSION['message'] = 'guestadded';
header("Location: index.php");
} else {
  echo "Error adding a record: " . $sql . "<br>" . mysqli_error($conn);
}
} // end of isset

// Delete a Guest
if(isset($_POST['deleteGuest'])) {

  $sql = "DELETE FROM MyGuests WHERE id='{$_POST['id']}'";
  if (mysqli_query($conn, $sql)) {
  $_SESSION['message'] = 'guestdeleted';
  header("Location: index.php");
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
  }
// end of delete

// Update a guest
if(isset($_POST['updateGuest'])) {
  $firstname = ucfirst(strtolower($_POST['firstname']));
  $lastname = ucfirst(strtolower($_POST['lastname']));
  $email = strtolower($_POST['email']);
  $sql = "UPDATE MyGuests SET firstname='{$firstname}',lastname='{$lastname}',email='{$email}' WHERE id='{$_POST['id']}'";
  if (mysqli_query($conn, $sql)) {
  $_SESSION['message'] = 'guestupdated';
  header("Location: index.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
  }
mysqli_close($conn);

?>