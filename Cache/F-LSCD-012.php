
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

        </body>
        <div class="card-footer">
          <a type="button" style="float: right; color:white;" rel="tooltip" onclick="addRow()" class="btn btn-success " data-original-title="" title="">
            Añadir Tasa</i>
          </a>          
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
                  function getVariance($avg, $list){
                    $total_var = 0;
                    foreach ($list as $key => $value) {
                      $total_var += pow(($value - $avg),2);
                    }
                    return sqrt($total_var/(count($list)-1));
                  };
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
                            
                            $conv_u = [1000,1000000,10000,10,0.01,10000,10,1000000];

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
                              $LTS = array($value['LT1'],$value['LT2'],$value['LT3'],$value['LT4'],$value['LT5'],$value['LT6'],$value['LT7'],$value['LT8'],$value['LT9'],$value['LT10']);
                              $minimo_array = min($LTS);                              
                              $digitos = strlen(substr(strrchr($minimo_array, "."), 1));
                              if ($digitos == 0) {
                                $minimo = 1;
                              }
                              elseif ($digitos == 1) {
                                $minimo = 0.1;
                              }
                              elseif ($digitos == 2) {
                                $minimo = 0.01;
                              }else{

                              }
                              $promedio = array_sum($LTS)/count($LTS);

                              $desv_stand = number_format(getVariance($promedio,$LTS),2);
                              $CV = number_format(($desv_stand/$promedio*100),2);
                              $Factor_K = $conv_u[0];

                              if ($value['unidad'] == "µSv") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[0];
                              } 
                              elseif ($value['unidad'] == "mSv") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[1];
                              } 
                              elseif ($value['unidad'] == "Sv") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[2];
                              } 
                              elseif ($value['unidad'] == "R") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[3];
                              } 
                              elseif ($value['unidad'] == "mR") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[4];
                              } 
                              elseif ($value['unidad'] == "µR") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[5];
                              } 
                              elseif ($value['unidad'] == "rem") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[6];
                              } 
                              elseif ($value['unidad'] == "mrem") {
                                $Factor_K = ($value["tasaVCV"]/$promedio)*$conv_u[7];
                              } 
                              else {
                                $Factor_K = "Variable no encontrada";
                              }

                              

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
                                <td>'.$minimo .'</td>
                                <td>'.$value['unidad'].'</td>
                                <td>'.$promedio.'</td>
                                <td>'.$desv_stand.'</td>
                                <td>'.$CV.'</td>
                                <td>'.$Factor_K.'</td>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
