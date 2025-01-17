<?php session_start();
$uid = $_SESSION['uid'] ; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="css/normalize2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="menu-btn">
      <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
      <div class="close-btn">
        <i class="fas fa-times"></i>
      </div>
      <div class="menu">
        <div class="item"><a href="others/facultydata.php"><i class="fas fa-user"></i>Faculty Data</a></div>
        <div class="item"><a href="others/Attendance.php"><i class="fas fa-user"></i>Attendance</a></div>

        <div class="item">
          <a class="sub-btn"><i class="far fa-bell"></i>Results<i class="fas fa-angle-right dropdown"></i></a>
          <div class="sub-menu">
            <a href="Faculty/1-1Results.php" class="sub-item">1-1 Results</a>
            <a href="Faculty/1-2Results.php" class="sub-item">1-2 Results</a>
            <a href="Faculty/2-1Results.php" class="sub-item">2-1 Results</a>
            <a href="Faculty/2-2Results.php" class="sub-item">2-2 Results</a>
            <a href="Faculty/3-1Results.php" class="sub-item">3-1 Results</a>
            <a href="Faculty/3-2Results.php" class="sub-item">3-2 Results</a>
            <a href="Faculty/4-1Results.php" class="sub-item">4-1 Results</a>
            <a href="Faculty/4-2Results.php" class="sub-item">4-2 Results</a>
	    <a href="Faculty/supplyresults.php" class="sub-item">supply Results</a>
          </div>
      
         <div class="item"><a href="others/studentinfo.php"><i class="fas fa-user"></i>student Info</a></div>
        <div class="item"><a href="G D K Kishore.php"><i class="fas fa-clock"></i>Class Time Table</a></div>
<div class="item"><a href="https://drive.google.com/drive/folders/12nBebeJbGhZNw0kYuSs-fZ6M4A3iug2a?usp=sharing"><i class="fas fa-file-alt"></i>Old QuestionPapers</a></div>
     <div class="item"><a href="https://www.injntu.com/jntuk-fast-updates-jntuk-results"><i class="fas fa-th"></i>Exam Time Tables</a></div>
     <div class="item"><a href="passwordreset.html"><i class="fas fa-lock"></i>Reset Password</a></div> 
     <div class="item"><a href="logout.php"><i class="fas fa-info-circle"></i>Logout</a></div>
      </div>
</div>
    </div>
<section class="main">
      <h1>Welcome to <br>IT DEPT
        <?php
        $conn = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($conn, 'javapoint');

        $query = "SELECT * FROM `teachers` WHERE uid = '$uid'";
        $query_run = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($query_run)) {
    ?>
          
            <p> <?php echo $row['email']; ?> </p>
           <p> <?php if($row['Gender'] == 'Female'){
              echo 'Madam';
          } else {
            echo 'Sir';
          }?></p>
                <?php

        }
    
      ?></h1>
    </section>

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script>

  </body>
</html>
