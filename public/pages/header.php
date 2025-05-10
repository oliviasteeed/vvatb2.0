<!doctype html>

<html lang="en">
  <head>
    <title>viavia (and the band)</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/fonts.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- gsap motion library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <!-- make album covers float -->
    <script src="../../private/js/float.js" type="text/javascript"></script>

    <!-- icons to change colour on hover -->
    <script src="../../private/js/link-hover.js" type="text/javascript"></script>

    <!-- hover flip image -->
    <script src="../../private/js/hover-flip.js" type="text/javascript"></script>

    <!-- album cover flip -->
    <script src="../../private/js/album-cover.js" type="text/javascript"></script>

    <!-- caption text -->
    <script src="../../private/js/hover-caption.js" type="text/javascript"></script>



  </head>

  <body>

  <!-- pasted from home.php where developed -->
<div class='outer-container'>

<div class='outer-nav top-z'>


        <div class='text-icon-button-box' onclick="window.location.href='home.php'">
          <?php
            $currentFile = basename($_SERVER['REQUEST_URI']); 
            if ($currentFile != 'home.php') {
              echo '<img class="icon-button" id="back-button" src="../media/icons/back.png" onclick="window.location.href=\'home.php\'">
                <a href="home.php">viavia <span class="a-bracket">(</span>and the band<span class="a-bracket">)</span></a>';
            }
            else{
              echo "<p><span class='a-bracket'>©</span>2025</p>";
            }
          ?>
        </div>

        <div class='inner-nav'>
            <div class='text-icon-button-box' onclick="window.location.href='https://artists.landr.com/055855653093'">
                <a href="https://artists.landr.com/055855653093">listen</a>
                <img class="icon-button" id="back-button" src="../media/icons/music.png">
            </div>  

            <div class='text-icon-button-box' onclick="window.location.href='https://www.youtube.com/@viaviaandtheband'">
                <a href="https://www.youtube.com/@viaviaandtheband">watch</a>
                <img class="icon-button" id="back-button" src="../media/icons/play.png">
            </div>  

            <div class='text-icon-button-box' onclick="window.location.href='https://www.instagram.com/viaviaandtheband'">
                <a href="https://www.instagram.com/viaviaandtheband">follow</a>
                <img class="icon-button" id="back-button" src="../media/icons/connect.png">
            </div>  
        </div>
</div>
<!-- end of nav -->