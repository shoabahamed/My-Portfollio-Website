<?php
  require("db-connection.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectTitle = trim($_POST["projectTitle"]);
    $projectTitle = preg_replace('/\s+/', ' ', $projectTitle);
    $imageName = trim($_POST["imageName"]);
    $projectText = trim($_POST["projectText"]);
    $projectText = preg_replace('/\s+/', ' ', $projectText);
    $seeMoreLink = trim($_POST["seeMoreLink"]);

    $query = "INSERT INTO projects(image_name, project_title, project_text, see_more_link) VALUES(
      '$imageName',
      '$projectTitle',
      '$projectText',
      '$seeMoreLink');";

    $insert = mysqli_query($connection, $query);
    if(!$insert){
      die("Insertion not successful". mysqli_error($connection));
    }else{
      header("Location: dashboard.php");
      exit();
    }
    
} else {
    header("Location: dashboard.php");
    exit();
}
?>
