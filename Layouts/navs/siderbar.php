<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="../../Public/css/sliderbar.css">
<?php include_once('../../public/css/data-table.php') ?>
</head>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">AlephGroup</span> </a>
                <div class="nav_list"> 
                    <a onclick="Index()"  class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Formulario</span> </a> 
                    <a onclick="LSCD0123()" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">F-LSCD-012</span> </a> 
                    <!-- <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Files</span> </a> 
                    <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a>  -->
                </div>
            </div> 
            <!-- <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a> -->
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <div id="LSCD03"  class="flujo" style="display: block; margin-top:90px;"><?php include_once ('../../Functions/F-LSCD-03.php')?></div>
    </div>
    <!--Container Main end-->
  <?php include_once('../Footer.php')?>
  </body>
  <script src="../../Public/JS/siderbard.js"></script>
  <script src="../../Public/JS/table-create03.js"></script>
  <?php include_once('../../Public/JS/data-table.php') ?>
  <script>
      function Index() {
        document.getElementById("LSCD03").style.display = 'block'; 
        document.getElementById("LSCD0123").style.display = 'none'; 
      };
      function LSCD0123() {
        document.getElementById("LSCD03").style.display = 'none'; 
        document.getElementById("LSCD0123").style.display = 'block'; 
      }
  </script>
</html>