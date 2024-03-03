<?php
require("db-connection.php");
$projectTitle = "";
$imageName = "";
$projectText = "";
$seeMoreLink = "";
$project_id = $_REQUEST['project_id'];


$query = "SELECT * FROM projects WHERE id='$project_id'";
$show = mysqli_query($connection, $query);
if (!$show) {
  die("Insertion not successful" . mysqli_error($connection));
} else {
  $row = mysqli_fetch_assoc($show);
  $projectTitle = $row["project_title"];
  $imageName = $row["image_name"];
  $projectText = $row["project_text"];
  $seeMoreLink = $row["see_more_link"];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Project</title>
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/add-project.css">
</head>

<body>
  <div class="notice">
    Please make sure that the image name is in the assets folder.
  </div>
  <div class="container">
    <h1>Update Project</h1>
    <form method="POST" action="./process-update-project.php">
      <div class="form-group">
        <label for="projectTitle">Project Title:</label>
        <input type="text" id="projectTitle" name="projectTitle" placeholder="Project Title" value="<?php echo $projectTitle ?>" required>
      </div>
      <div class="form-group">
        <label for="imageName">Image Name:</label>
        <input type="text" id="imageName" name="imageName" placeholder="image.png/image.jpg...etc" value="<?php echo $imageName ?>" required>
      </div>
      <div class="form-group">
        <label for="projectText">Project Text:</label>
        <textarea id="projectText" name="projectText" rows="5" placeholder="Write short description of the project" required><?php echo $projectText ?></textarea>
      </div>
      <div class="form-group">
        <label for="seeMoreLink">See More Link:</label>
        <input type="text" id="seeMoreLink" name="seeMoreLink" placeholder="Give a link to the project" value="<?php echo $seeMoreLink ?>" required>
      </div>
      <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
      <button type="submit" name="submit">Update</button>
    </form>
  </div>
</body>

</html>