<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Project</title>
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="./styles/add-project.css">
</head>

<body>
  <div class="notice">
      Please make sure that the image name is in the assets folder.
  </div>
  <div class="container">    
    <h1>Add New Project</h1>
    <form method="POST" action="./process-new-project.php">
      <div class="form-group">
        <label for="projectTitle">Project Title:</label>
        <input type="text" id="projectTitle" name="projectTitle" 
        placeholder="Project Title" required>
      </div>
      <div class="form-group">
        <label for="imageName">Image Name:</label>
        <input type="text" id="imageName" name="imageName" 
        placeholder="image.png/image.jpg...etc" required>
      </div>
      <div class="form-group">
        <label for="projectText">Project Text:</label>
        <textarea id="projectText" name="projectText" rows="5" placeholder="Write short description of the project" required></textarea>
      </div>
      <div class="form-group">
        <label for="seeMoreLink">See More Link:</label>
        <input type="text" id="seeMoreLink" name="seeMoreLink"
        placeholder="Give a link to the project" required>
      </div>
      <button type="submit">Add</button>
    </form>
  </div>
</body>

</html>
