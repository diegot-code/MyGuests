<form class="form-horizontal" action="functions.php" method="POST">  

   <input type="text" class="form-control" name="firstname"  placeholder="First Name"
  <?php if(isset($_POST['firstname'])) {
    echo 'value="'. $_POST['firstname'] .'"';
  }  
  ?> 
  required><br>
  <input type="text" class="form-control" name="lastname" placeholder="Last Name" 
  <?php if(isset($_POST['lastname'])) {
    echo 'value="'. $_POST['lastname'] .'"';
  }  
  ?> 
  required><br>
  <input type="email" class="form-control" name="email" placeholder="Email"
  <?php if(isset($_POST['email'])) {
    echo 'value=" '. $_POST['email'] .'"';
  }  
  ?> 
  required><br>

  <?php
if(isset($_POST['editGuest'])) {
echo '<input type="hidden" name="id" value="'.$_POST['id'].'">';
echo '<button type="submit" name="updateGuest" class="btn btn-warning">Update Guest</button>';
} else {
echo '<button type="submit" name="addGuest" class="btn btn-info">Add Guest</button>';
}
?>

<?php
include 'alert.php';

?>

</form>