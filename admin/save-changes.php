<?php
  if(isset($_POST['about-me-submit'])){
    $newSectionTitle = $_POST['sectionTitle'];
    $newIntroductionText = $_POST['introduction'];

    $query = "UPDATE about_me_table SET about_me_title='$newSectionTitle', about_me_text='$newIntroductionText'";
    $update = mysqli_query($connection, $query);

    if(!$update){
      die("update not done " . mysqli_error($connection));
    }else{
      echo "<script>
              const msg = document.querySelector('.success-msg');
              msg.style.display = 'block';
              setTimeout(function() {
                msg.style.display = 'none';
                window.location.href = 'dashboard.php';
              }, 3000);
          </script>";
    }
  }
?>