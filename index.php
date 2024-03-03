<?php
require("./admin/db-connection.php");
require("./admin/about-me-load.php");
require("./admin/projects-load.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>MY portfolio</title>
  <script src="https://kit.fontawesome.com/31b429dc0a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet", href="./styles/general.css">
  <link rel="stylesheet", href="./styles/header.css">
  <link rel="stylesheet", href="./styles/about-me.css">
  <link rel="stylesheet", href="./styles/profile.css">
  <link rel="stylesheet", href="./styles/projects.css">
  <link rel="stylesheet", href="./styles/contact-me.css">
  <link rel="stylesheet", href="./styles/mediaquery.css">

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

</head>
<body>
  
  <section id="header">
    <div class="navigation">
      <div class="logo" onclick="location.href='#';">Shoab Ahamed</div>
      <nav class="nav-bar">
        <ul class="sidemenu"> 
          <li><a herf="#header" onclick="location.href='#';">Home</a></li>
          <li><a href="#about">About Me</a></li>
          <li><a href="#profile-main">Profile</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact-me">Contact</a></li>
          <i class="fas fa-times" onclick="closeMenu();"></i>
        </ul>
        <i class="fas fa-bars" onclick="openMenu();"></i>
      </nav>
    </div>

    <div class="profile">
      <div class="profile-main-img-container">
        <img src="assets/portfolio-main-3.jpg" alt="Shoab Ahamed">
      </div>

      <div class="profile-info">
        <div class="profile-text">
          <p>Hello, I'm</p>
          <h1>Shoab Ahamed</h1>
          <p>Machine Learning enthusiast</p>
        </div>

        <div class="buttons">
          <button class="btn" onclick="location.href = './assets/CV.txt'">Download CV</button>
          <button class="btn" href="#contact-me" onclick="location.href='#contact-me';">Contact Me</button>
        </div>

        <div class="social-links">
          <a href="https://www.linkedin.com/in/shoab-ahamed-b7a484242/"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.kaggle.com/shoabahamed"><i class="fa-brands fa-kaggle"></i></a>
          <a href="https://github.com/shoabahamed"><i class="fa-brands fa-github"></i></a>

          <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
        </div>  
      </div>
        

    </div>

  </section>

  <section id="about">
   <div class="title"><?php echo $sectionTitle?></div>
    <div class="about-me-container">
      <div class="second-image-container">
        <span><img class="second-portfolio-image" src="./assets/portfollio-second.jpg"></span>
      </div>
      <div class="about-me-text">
        <?php echo $introductionText?>
      </div>
    </div> 
  </section> 

  <section id="profile-main">
    <div class="title">Profile</div>
    <div class="profile-info-container">
      <div class="experience">
        <fieldset>
          <legend class="title-sub">Experience</legend>
          <div class="info">
              <p>2+ years<br><span class="highlight"><a href="#projects">Machine Learning</a></span></p>
              <p>1+ years<br><span class="highlight"><a href="#projects">Data Analytics</a></span></p>
              <p>Kaggle Notebook<br><span class="highlight"><a href="https://www.kaggle.com/shoabahamed/code">Master</a></span></p>
              <p>1+ years<br><span class="highlight"><a href="#projects">Html, CSS, Javascript</a></span></p>       
          </div>
        </fieldset>

      </div>
      <div class="skills">
        <fieldset>
          <legend class="title-sub">Skills</legend>
          <div class="article-container">
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Python</h3>
                <p>Intermediate</p>
              </div>
            </div>
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Neural Networks</h3>
                <p>Intermediate</p>
              </div>
            </div class="skill-info">
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Image Processing</h3>
                <p>Intermediate</p>
              </div>
            </div>
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>NLP</h3>
                <p>Beginner</p>
              </div>
            </div>
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Sql</h3>
                <p>Intermediate</p>
              </div>
            </div>
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Data Analysis</h3>
                <p>Intermediate</p>
              </div>
            </div>

            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Tableau</h3>
                <p>Beginner</p>
              </div>
            </div>

            

            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Java</h3>
                <p>Basic</p>
              </div>
            </div>

            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Html</h3>
                <p>Intermediate</p>
              </div>
            </div>
            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>CSS</h3>
                <p>Intermediate</p>
              </div>
            </div>

            <div class="skill-info">
              <i class="fa-solid fa-book-open-reader"></i>
              <div>
                <h3>Javascript</h3>
                <p>Beginner</p>
              </div>
            </div>

          </div>
        </fieldset>
        
      </div>
      <div class="education">
        <fieldset>
          <legend class="title-sub">Education</legend>
          <div class="info">
            <div>
              <i class="fa-solid fa-certificate icon-checkmark"></i>
              <p><span class="highlight"><a href="https://www.kuet.ac.bd"> Student at</a></span><br> KUET</p>
            </div>
            <div>
              <i class="fa-solid fa-medal icon-checkmark"></i>
              <p><span class="highlight"><a href="https://www.credly.com/badges/08e55614-0efa-4fdb-99d0-7f0a663dc145/linked_in?t=s84cwd"> Deep Learning Specialization</a></span><br>by <br>Andrew Ng</p>
            </div>
            <div>          
              <i class="fa-solid fa-medal icon-checkmark"></i>
              <p><span class="highlight"><a href="https://www.credly.com/badges/83fe8b14-04f9-47a2-a663-b71d0301ba1e/linked_in?t=rovxy4">Google Data Analytics <br> Professional Certificate</a></span><br>by<br>Google</p>
            </div>
          </div>
        </fieldset>
        
      </div>
    </div>
  </section>


  <section id="projects">
    <div class="title">Projects</div>
      <div class="work-list">
      <?php
          for($i=0; $i<$projects_count; $i++){
            $project = $all_projects[$i];
            $project_id = $project['id'];
            $project_image_path = get_image_path($project["image_name"], $from_admin=False);
            $project_title = $project['project_title'];
            $project_text = $project['project_text'];
            $see_more_link = $project['see_more_link'];
          ?>
          <div class="work">
            <img src="<?php echo $project_image_path?>">
            <h3 class="project-title"><?php echo $project_title ?></h3>
            <div class="layer">
              <p><?php echo $project_text ?></p>
              <a href="<?php echo $see_more_link ?>"><button class="btn-more">See More</button></a>
            </div>
          </div>
        <?php
          }
        ?>
       
      </div>
  </section>

  <section id="contact-me">
    <div class="title">Contact Me</div>
    <div class="contact-container">
      <div class="left-col">
        <div class="contactInfo">
					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="details">
							<span>Phone</span>
							<span>+880 01533585128</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="details">
							<span>Email</span>
							<span>shoabahamed2007015@gmail.com</span>
						</div>
					</div>

					<div class="iconGroup">
						<div class="icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="details">
							<span>Location</span>
							<span>Khulna, Bangladesh</span>
						</div>
					</div>
				</div>

        <div class="social-links-contacts">
          <a href="https://www.linkedin.com/in/shoab-ahamed-b7a484242/"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.kaggle.com/shoabahamed"><i class="fa-brands fa-kaggle"></i></a>
          <a href="https://github.com/shoabahamed"><i class="fa-brands fa-github"></i></a>

          <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a>
          <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
        </div>  
      </div>
      <div class="right-col">
        <form class="messageForm" id="contact-form">
					<input type="text" name="user_name" required="required" placeholder="Name" class="name input-field">
					<input type="email" name="user_email" required="required" placeholder="Email" class="email input-field">
					<input type="text" name="user_subject" required="required" placeholder="Subject" class="subject input-field">

					<textarea name="message" required="required" placeholder="message" class="message input-field" rows="5" cols="50"></textarea>
        
          <input type="submit" value="Send Email" class="send-btn input-field">
				</form>
      </div>
    </div>
    <div id="footer">
      <span id="msg">Email Sent Succesfully</span>
      <p>Copyright © 2024 Shoab Ahamed. All Rights Reserved.<a href="./admin/login.php"><button class="admin">Admin</button></a></p>
    </div>
  </section>

  <script type="text/javascript" src="script.js"></script>

</body>
</html>