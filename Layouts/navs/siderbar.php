
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
                    <a onclick="Index()"  class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">F-LSCD-03</span> </a> 
                    <?php 
                    if (isset($_POST['tasaVCV'])) {
                        echo '<a onclick="LSCD012()" class="nav_link"> <i class="bx bx-folder nav_icon"></i> <span class="nav_name">F-LSCD-012</span> </a>';  
                        echo '<a onclick="ICM()" class="nav_link"> <i class="bx bx-folder nav_icon"></i> <span class="nav_name">Insert. Cal. Mon.</span> </a>';                        
                    } else{

                    }
                    ?>
                </div>
            </div> 
            <!-- <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a> -->
        </nav>
    </div>
    <div class="height-100 bg-light">
        <div id="LSCD03"  class="flujo" style="display: block; margin-top:90px;"><?php include_once ('./Functions/F-LSCD-03.php')?></div>
        <div id="LSCD012"  class="flujo" style="display: none; margin-top:90px;"><?php include_once ('./Functions/F-LSCD-012.php')?></div>
        <div id="ICM"  class="flujo" style="display: none; margin-top:90px;"><?php include_once ('./Functions/Insert_Cal_Mon.php')?></div>
    </div>
  </body>
<script src="./Public/JS/siderbard.js"></script>
  <script>
      function Index() {
        document.getElementById("LSCD03").style.display = 'block'; 
        document.getElementById("LSCD012").style.display = 'none'; 
        document.getElementById("ICM").style.display = 'none'; 
      };
      function LSCD012() {
        document.getElementById("LSCD03").style.display = 'none'; 
        document.getElementById("LSCD012").style.display = 'block'; 
        document.getElementById("ICM").style.display = 'none'; 
      }
      function ICM() {
        document.getElementById("LSCD03").style.display = 'none'; 
        document.getElementById("LSCD012").style.display = 'none'; 
        document.getElementById("ICM").style.display = 'block'; 
      }
  </script>