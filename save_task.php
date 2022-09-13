<?php

include('db.php');

if (isset($_POST['save_task'])) {
 
  $title = $_POST['title'];
  
  $description = $_POST['description'];
  
  $query = "call create1('$title','$description');";
  mysqli_query($conn, $query);
  

  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>
