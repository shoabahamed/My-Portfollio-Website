<?php 
  require("db-connection.php");

  $project_id = $_REQUEST['project_id'];
  $query = "DELETE FROM projects WHERE id='$project_id'";
  $delete = mysqli_query($connection, $query);

  if(!$delete){
    die("Delete failed " . mysqli_error($connection));
  }else{
    echo "<script>
            window.location.href = 'dashboard.php';
        </script>";
  }
  
?>