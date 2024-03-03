<?php
require("db-connection.php");
if (isset($_POST['submit'])) {

  $project_id = $_REQUEST['project_id'];

  $projectTitle = trim($_POST["projectTitle"]);
  $projectTitle = preg_replace('/\s+/', ' ', $projectTitle);
  $imageName = trim($_POST["imageName"]);
  $projectText = trim($_POST["projectText"]);
  $projectText = preg_replace('/\s+/', ' ', $projectText);
  $seeMoreLink = trim($_POST["seeMoreLink"]);

  $query = "UPDATE projects 
          SET 
            image_name = '$imageName',
            project_title = '$projectTitle',
            project_text = '$projectText',
            see_more_link = '$seeMoreLink'
          WHERE 
            id = '$project_id';";


  $update = mysqli_query($connection, $query);
  if(!$update){
    die("Insertion not successful". mysqli_error($connection));
  }else{
    header("Location: ./dashboard.php");
    exit();
  }

} else {
  header("Location: ./dashboard.php");
  exit();
}
