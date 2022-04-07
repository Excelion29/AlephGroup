<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../public/css/data-table.php')?>
    <title>F-LSD012</title> 
</head>
<body>
  <form action="" method="POST">
    <div class="swiper-slide">
      <div class="card-body">
        <div class="card-header">
          <h5 class="title">Formulario</h5>
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
  <div class="content" style="margin-top:7%;" style=" width: 30em;overflow-x: auto;white-space: nowrap;">
        <div class="modal-header">
          <h5 class="modal-title">Respuesta</h5>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead class="thead-inverse">
                <tr>
                    <th>Nº Item</th>
                    <th>Tasa VCV</th>
                    <th>Lectura 1</th>
                    <th>Lectura 2</th>
                    <th>Lectura 3</th>
                    <th>Lectura 4</th>
                    <th>Lectura 5</th>
                    <th>Lectura 6</th>
                    <th>Lectura 7</th>
                    <th>Lectura 8</th>
                    <th>Lectura 9</th>
                    <th>Lectura 10</th>
                    <th>Lectura min</th>
                    <th>Unidad</th>
                    <th>Promedio</th>
                    <th>D.S.</th>
                    <th>C.V.</th>
                    <th>Factor K</th>
                </tr>
            </thead>
            <tbody> 
                <?php   
                  if(isset($_POST['tasaVCV'])){
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
                            $unidad = $_POST['unidad'];

                            foreach ($tasaVCV as $key => $value) {
                              $array[] = array(
                                'tasaVCV' =>  $tasaVCV[$key],
                                'LT1' =>  $LT1[$key],
                                'LT2' =>  $LT2[$key],
                                'LT3' =>  $LT3[$key],
                                'LT4' =>  $LT4[$key],
                                'LT5' =>  $LT5[$key],
                                'LT6' =>  $LT6[$key],
                                'LT7' =>  $LT7[$key],
                                'LT8' =>  $LT8[$key],
                                'LT9' =>  $LT9[$key],
                                'LT10' => $LT10[$key],
                                'unidad' => $unidad[$key]
                              );
                            };                            
                            foreach ($array as $key =>$value){
                              echo 
                              '<tr>
                                <td>'.$key.'</td>
                                <td>'.$value['tasaVCV'].'</td>
                                <td>'.$value['LT1'].'</td>
                                <td>'.$value['LT2'].'</td>
                                <td>'.$value['LT3'].'</td>
                                <td>'.$value['LT4'].'</td>
                                <td>'.$value['LT5'].'</td>
                                <td>'.$value['LT6'].'</td>
                                <td>'.$value['LT7'].'</td>
                                <td>'.$value['LT8'].'</td>
                                <td>'.$value['LT9'].'</td>
                                <td>'.$value['LT10'].'</td>
                                <td>'.'</td>
                                <td>'.$value['unidad'].'</td>
                              </tr>';
                            }
                        break;
                    }
                  }
                  else{
                    echo 
                    '<td colspan="18" style="text-align:center"> 
                      Data Nula
                    </td>';
                  }
                ?>
            </tbody>
        </table>
  </div>
  <?php include_once('../Layouts/Footer.php')?>
</body>

<script>
    var arrHead = new Array();
    arrHead = ['', 'Tasa VCV','Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10', 'Unidad'];
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
            th.setAttribute('class','col-sm-1');
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
          }
          var div = document.getElementById('cont');
          div.appendChild(empTable); 
      };
  </script>
<script src="../Public/JS/table-create.js"></script>
</html>