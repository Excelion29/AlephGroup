<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>F-LSD012</title> 
</head>
<body>
  <form action="" method="POST">
    <div class="swiper-slide">
      <div class="card-body">
        <div class="card-header">
          <h5 class="title">Servicios</h5>
        </div>
        <body onload="createTable()">
          <div class="card-body">
            <div class="author">
                <div id="cont" class="table-responsive">
                
                </div>
            </div>
          </div>

          <a type="button" style="float: right; color:white;" rel="tooltip" onclick="addRow()" class="btn btn-success " data-original-title="" title="">
            Añadir Tasa</i>
          </a>
        </body>
        <div class="card-footer">
          
          <input type="hidden" name="consulta" value="tasaVCV">
          <button type="submit" class="btn btn-primary btn-round" >Guardar</button>
        </div>
      </div>
    </div>
  </form>
  <?php include_once('../Layouts/Footer.php')?>
</body>

<?php   

  switch ($_POST['consulta']) {
      case 'tasaVCV':
          $tasaVCV = $_POST['tasaVCV'];
          $LT1 = $_POST['LT1'];
          $LT2 = $_POST['LT2'];
          $LT3 = $_POST['LT3'];
          $LT4 = $_POST['LT4'];
          $LT5 = $_POST['LT5'];
          $LT6 = $_POST['LT6'];
          $LT7 = $_POST['LT7'];
          $LT8 = $_POST['LT8'];
          $LT9 = $_POST['LT9'];
          $LT10 = $_POST['LT10'];

          for ($i=0; $i < count($tasaVCV); $i++) { 
            print $tasaVCV[$i].'<br>';
            print $LT1[$i].'<br>';
            print $LT2[$i].'<br>';
            print $LT3[$i].'<br>';
            print $LT4[$i].'<br>';
            print $LT5[$i].'<br>';
            print $LT6[$i].'<br>';
            print $LT7[$i].'<br>';
            print $LT8[$i].'<br>';
            print $LT9[$i].'<br>';
            print $LT10[$i].'<br>';
            print '<br>';
          }
          
      break;
  }

?>
<script>
    var arrHead = new Array();
    arrHead = ['', 'Tasa VCV', 'Lectura', 'Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10', 'Lectura min','Promedio','D.S','C.V','Factor K'];
      function createTable() {
          var empTable = document.createElement('table');
          empTable.setAttribute('id', 'empTable');
          empTable.setAttribute('mame', 'empTable');
          empTable.setAttribute('class', 'table table-striped table-bordered table-sm dt-responsive');
          empTable.setAttribute('cellspacing', '0');
          empTable.setAttribute('width', '100%');
          var tr = empTable.insertRow(-1);
          for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');
            if (h==1) {
              th.setAttribute('class','col-sm-7');
            }
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
          }
          var div = document.getElementById('cont');
          div.appendChild(empTable); 
      };
  </script>
<script src="../Public/JS/table-create.js"></script>
</html>