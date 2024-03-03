<?php
  $query = "SELECT * FROM about_me_table";
  $show = mysqli_query($connection, $query);
  $row = mysqli_fetch_assoc($show);
  $sectionTitle = $row['about_me_title'];
  $introductionText = trim($row["about_me_text"]);

?>