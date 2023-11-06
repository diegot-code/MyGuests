<!-- Display Message after Added/Deleted/Updated -->
<?php
  if(isset($_SESSION['message'])) {
  
  if($_SESSION['message'] == 'guestupdated') {

      echo '<div class="alert alert-info alert-dismissible">
      <strong>Success!</strong> Guest Updated.
      </div><br><br>';
      }
  if($_SESSION['message'] == 'guestadded') {
    echo '<div class="alert alert-success alert-dismissible">
    <strong>Success!</strong> Guest Added.
    </div><br><br>';
    
    }
  if($_SESSION['message'] == 'guestdeleted') {
    echo '<div class="alert alert-warning alert-dismissible">
    <strong>Guest Deleted!</strong> 
    </div><br><br>';
    }
    unset($_SESSION['message']);

}

?>