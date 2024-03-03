<?php
  $query = "SELECT * FROM projects";
  $show = mysqli_query($connection, $query);
  $all_projects = [];
  while($row = mysqli_fetch_assoc($show)){
    array_push($all_projects, $row);
  }
  $projects_count = count($all_projects);
  
  // get the full path give the image name with image1.png/image2.png format
  function get_image_path($image_name, $from_admin=True){
    $base_path = "./assets/";
    if($from_admin){
      $base_path = "../assets/";
    }
    return $base_path.$image_name;
  }
  
?>