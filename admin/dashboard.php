<?php
require("db-connection.php");
require("about-me-load.php");
require("projects-load.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./styles/general.css">
  <link rel="stylesheet" href="/portfolio/admin/styles/dashboard.css">
  <link rel="stylesheet" href="/portfolio/admin/styles/about-me.css">
  <link rel="stylesheet" href="/portfolio/admin/styles/projects.css">
  <link rel="stylesheet" href="/portfolio/admin/styles/mediaquery.css">
</head>

<body>
  <!-- <div class="sidebar">
    <div class="upper-portion">
      <div class="sidebar-header">
        <div class="dashboard-text">Dashboard</div>
        <div class="sidebar-user">
          <div class="username">Admin</div>
          <div class="email">admin@example.com</div>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="js-menu-button active" data-section="about-me">About Me</li>
        <li class="js-menu-button" data-section="profile">Profile</li>
        <li class="js-menu-button" data-section="projects">Projects</li>
      </ul>
    </div>

    <div class="lower-portion">
      <a href="./logout.php"><button class="logout-btn">Logout</button></a>
    </div>

  </div> -->
  <section id="header">
    <div class="navigation">
      <div class="logo" onclick="location.href='#';">Dashboard</div>
      <nav class="nav-bar">
        <ul class="sidemenu"> 
          <li onclick="window.location.href='../index.php'"><a herf="#">Go Home</a></li>
          <li><a href="#" class="js-menu-button active" data-section="about-me">About Me</a></li>
          <li><a href="#" class="js-menu-button" data-section="projects">Projects</a></li>
        </ul>
      </nav>
      <nav class="nav-bar">
        <ul class="sidemenu"> 
          <li class="logout"><a href="./logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </section>

  <section id="header-small">
    <div class="navigation-small">
      <div class="logo" onclick="location.href='#';">Dashboard</div>
      <nav class="nav-bar-small">
        <ul class="sidemenu-small"> 
          <li onclick="window.location.href='../index.php'"><a herf="#">Go Home</a></li>
          <li><a href="#" class="js-menu-button-small" data-section="about-me-small">About Me</a></li>
          <li><a href="#" class="js-menu-button-small" data-section="projects-small">Projects</a></li>
          <li class="logout"><a href="./logout.php">Logout</a></li>
          <i class="fas fa-times" onclick="closeMenu();"></i>
        </ul>
        <i class="fas fa-bars" onclick="openMenu();"></i>
      </nav>
    </div>
  </section>

  <div class="main-content">
    <section class="about-me about-me-small section-content">
      <form method="POST">
        <div class="section">
          <label for="sectionTitle">Section Title</label>
          <input type="text" id="sectionTitle" name="sectionTitle" value="<?php echo $sectionTitle ?>" required>
        </div>
        <div class="section">
          <label for="introduction">Introduction</label>
          <textarea id="introduction" name="introduction" rows="8"><?php echo $introductionText ?></textarea>
        </div>
        <div>
          <span class="success-msg">Update Successful</span>
          <input type="submit" class="save-btn" name="about-me-submit" value="Save Changes">
        </div>
      </form>
    </section>
    <section class="projects projects-small section-content">
      <div class="work-list">
        <?php
          for($i=0; $i<$projects_count; $i++){
            $project = $all_projects[$i];
            $project_id = $project['id'];
            $project_image_path = get_image_path($project["image_name"]);
            $project_title = $project['project_title'];
            $project_text = $project['project_text'];
            
          ?>
          <div class="work">
            <img src="<?php echo $project_image_path?>">
            <h3 class="project-title"><?php echo $project_title ?></h3>
            <div class="layer">
              <p><?php echo $project_text ?></p>
              <div class="btn-update-delete">
                <a href="./update-project.php?project_id=<?php echo $project_id?>"><button class="btn-update">Update</button></a>
                <a href="./delete_project.php?project_id=<?php echo $project_id?>"><button class="btn-delete">Delete</button></a>
              </div>
            </div>
          </div>
        <?php
          }
        ?>
      </div>
      
      <div class="add-project-container">
          <button class="btn-add-project" onclick="window.location.href='./add-project.php'">Add New Project</button>
      </div>
    </section>
  </div>


  <?php
  require("save-changes.php");
  ?> 

  <script>

    // for high resolution screen
    const menuButton = document.querySelectorAll('.js-menu-button');
    const sectionContents = document.querySelectorAll('.section-content');
    menuButton.forEach((button) => {
      button.addEventListener('click', () => {
        section = button.dataset.section;
        sectionContents.forEach((content) => {
          if (content.classList.contains(section)) {
            content.style.display = 'block';
          } else {
            content.style.display = 'none';
          }
        });
        const currentActiveButton = document.querySelector(".active");
        currentActiveButton.classList.remove('active');
        button.classList.add("active");
      });
    })

    // for small resolution
  const menuButtonSmall = document.querySelectorAll('.js-menu-button-small');
  const sectionContentsSmall = document.querySelectorAll('.section-content');
  menuButtonSmall.forEach((button) => {
    button.addEventListener('click', () => {
      section = button.dataset.section;
      sectionContentsSmall.forEach((content) => {
        if (content.classList.contains(section)) {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      });
    });
  })


  // close and open hamburger icon
    const sideMenu = document.querySelector('.sidemenu-small');
    function openMenu(){
      console.log(sideMenu);
      sideMenu.style.right = "0";
    }
    function closeMenu(){
      sideMenu.style.right = "-500px";
    }

 </script>


</body>

</html>