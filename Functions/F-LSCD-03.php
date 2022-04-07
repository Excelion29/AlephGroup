

  <body onload="createTableLSCD036();createTableLSCD012()">
    <form name="formLSCD03" method="POST">
      <div class="swiper-slide">
        <div class="card-body">
          <div class="card-header">
            <h5 class="title">Formulario</h5>
          </div>
            <div class="card-body">
              <div class="author">
                  <div id="cont" class="table-responsive">
                  
                  </div>
              </div>
            </div>
            <div class="card-footer">
              <a type="button" style="float: right; color:white;" rel="tooltip" onclick="addDosis()" class="btn btn-success " data-original-title="" title="">
                Añadir Dosis</i>
              </a>          
              <input type="hidden" name="consulta" value="tasa_dosis_requerida">          
              <button type="submit" class="btn btn-primary btn-round" >Guardar</button>   
          </div>
        </div>
      </div>
    </form>
    <div class="content" style="overflow-x: auto;white-space: nowrap;">
      <div class="modal-header">
        <h5 class="modal-title">Respuesta</h5>
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-inverse">
          <tr>
            <th>Nº Item</th>
            <th>Tasa de dosis</th>
            <th>Unidad</th>
            <th>Combinación de atenuadores</th>
            <th>Distancia (m)</th>
          </tr>
        </thead>
        <tbody> 
          <?php                   
          $ATENUAD = ["SA","V","III","III+V","II+V","II+III","IV","IV+V","III+IV","I+IV","II+IV+V","II+III+IV+V","I+II+III+IV+V"];
          $DISTANCIA = [0.0374544366961017,0.0139340011717121,0.00596478244898521,0.0022995558436898,0.000928735344622004,0.000400689187922865,0.000245503830168261,0.0000966764175111964,0.0000420792970707922,0.0000187569283718711];
          if(isset($_POST['tasaVCV'])){
            $tasaVCV = $_POST['tasaVCV'];
              switch ($_POST['consulta']) {
                case 'tasa_dosis_requerida':
                  foreach ($tasaVCV as $key => $value) {
                    echo '<tr>';
                    echo '<td>'.$key.'</td>';
                    echo '<td>'.$value.'</td>';
                    echo '<td>Sv/h</td>';
                    if ($value>=number_format("4.16E-03",5) and $value<=number_format("3.75E02",5)) {  
                      echo '<td>'.$ATENUAD[0].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[0]/$value),3).'</td>';
                    }
                    elseif ($value>=number_format("2.13E-03",5) and $value<=number_format("6.19E-03",5)) {  
                      echo '<td>'.$ATENUAD[1].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[1]/$value),3).'</td>'; 
                    }                            
                    elseif ($value>=number_format("9.54E-04",5) and $value<=number_format("2.65E-03",5)) {   
                      echo '<td>'.$ATENUAD[2].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[2]/$value),3).'</td>';                                    
                    } 
                    elseif ($value>=number_format("3.68E-04",5) and $value<=number_format("1.02E-03",5)) {     
                      echo '<td>'.$ATENUAD[3].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[3]/$value),3).'</td>';
                    } 
                    elseif ($value>=number_format("1.49E-04",5) and $value<=number_format("4.13E-04",5)) { 
                      echo '<td>'.$ATENUAD[4].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[4]/$value),3).'</td>';                                    
                    } 
                    elseif ($value>=number_format("6.41E-05",5) and $value<=number_format("1.78E-04",5)) {  
                      echo '<td>'.$ATENUAD[5].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[5]/$value),3).'</td>';                           
                    } 
                    elseif ($value>=number_format("3.93E-05",5) and $value<=number_format("1.09E-04",5)) {  
                      echo '<td>'.$ATENUAD[6].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[6]/$value),3).'</td>';
                    } 
                    elseif ($value>=number_format("1.55E-05",5) and $value<=number_format("4.30E-05",5)) {  
                      echo '<td>'.$ATENUAD[7].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[7]/$value),3).'</td>';
                    } 
                    elseif ($value>=number_format("6.73E-06",5) and $value<=number_format("1.87E-05",5)) {  
                      echo '<td>'.$ATENUAD[8].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[8]/$value),3).'</td>';
                    } 
                    elseif ($value>=number_format("3.00E-06",5) and $value<=number_format("8.34E-06",5)) { 
                      echo '<td>'.$ATENUAD[9].'</td>';
                      echo '<td>'.number_format(sqrt($DISTANCIA[9]/$value),3).'</td>';
                    } 
                    else {
                      echo '<td>Tasa de dosis fuera de rango</td>';
                      echo '<td>Tasa de dosis fuera de rango</td>';
                    }
                    echo '</tr>';
                  };
                break;
              }
            }
          ?>       
        </tbody>
      </table>
    </div>
    <form action="" method="POST">
      <div class="swiper-slide">
        <div class="card-body">
          <div class="card-header">
            <h5 class="title">Formulario</h5>
          </div>
          <div class="card-body">
            <div class="author">
              <div id="contLSCD012" class="table-responsive">

              </div>
            </div>
          </div>
          <div class="card-footer">      
            <input type="hidden" name="consultalsd12" value="tasaVCVlsd12">
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
                    switch ($_POST['consultalsd12']) {
                        case 'tasaVCVlsd12':
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
  </body>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script>

      var HeadLSCD3 = new Array();
      HeadLSCD3 = ['', 'Tasa de dosis'];

      function createTableLSCD036() {
          var empTable = document.createElement('table');
          empTable.setAttribute('id', 'TableLSCD03');
          empTable.setAttribute('mame', 'TableLSCD03');
          empTable.setAttribute('class', 'table table-striped table-bordered table-sm dt-responsive');
          empTable.setAttribute('cellspacing', '0');
          empTable.setAttribute('width', '100%');
          var tr = empTable.insertRow(-1);
          for (var h = 0; h < HeadLSCD3.length; h++) {
            var th = document.createElement('th');
            th.setAttribute('class','col-sm-1');
            th.innerHTML = HeadLSCD3[h];
            tr.appendChild(th);
          }
          var div = document.getElementById('cont');
          div.appendChild(empTable);           
      };
    </script>
    <script>
      var arrHead = new Array();
      arrHead = ['Tasa VCV','Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10', 'Unidad'];
      
      var data = '<?=json_encode( $_POST['tasaVCV'] );?>';
      var jsvar = jQuery.parseJSON(data);

      function createTableLSCD012() {
          var empTable12 = document.createElement('table');
          empTable12.setAttribute('id', 'empTable');
          empTable12.setAttribute('mame', 'empTable');
          empTable12.setAttribute('class', 'table table-striped table-bordered table-sm dt-responsive');
          empTable12.setAttribute('cellspacing', '0');
          empTable12.setAttribute('width', '100%');
          var tr = empTable12.insertRow(-1);
          for (var h = 0; h < arrHead.length; h++) {
            var th = document.createElement('th');
            th.setAttribute('class','col-sm-1');
            th.innerHTML = arrHead[h];
            tr.appendChild(th);
          }
          var div = document.getElementById('contLSCD012');
          div.appendChild(empTable12);           

          var empTab = document.getElementById('empTable');
          var rowCnt = empTab.rows.length;
          for (let s = 0; s < jsvar.length; s++) {
            var tr = empTab.insertRow(rowCnt);
            tr = empTab.insertRow(rowCnt);
            var td = document.createElement('td');
            for (let c = 0; c < arrHead.length; c++) {
              td = tr.insertCell(c);
              if (c == 0) {
                var ele = document.createElement('p');
                    ele.appendChild( document.createTextNode( jsvar[s] ) );
                    td.appendChild(ele);
              }  
              if (c == 1){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT1');
                  ele.setAttribute('placeholder', 'L1');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT1');
                  ele.setAttribute('name', 'LT1[]');
                  td.appendChild(ele);     
                  

              }
              if (c == 2){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT2');
                  ele.setAttribute('placeholder', 'L2');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT2[]');
                  td.appendChild(ele);           
              }
              if (c == 3){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT3');
                  ele.setAttribute('placeholder', 'L3');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT3[]');
                  td.appendChild(ele);            
              }
              if (c == 4){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT4');
                  ele.setAttribute('placeholder', 'L4');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT4[]');
                  td.appendChild(ele);            
              }
              if (c == 5){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT5');
                  ele.setAttribute('placeholder', 'L5');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT5[]');
                  td.appendChild(ele);            
              }
              if (c == 6){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT6');
                  ele.setAttribute('placeholder', 'L6');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT6[]');
                  td.appendChild(ele);            
              }
              if (c == 7){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT7');
                  ele.setAttribute('placeholder', 'L7');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT7[]');
                  td.appendChild(ele);            
              }
              if (c == 8){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT8');
                  ele.setAttribute('placeholder', 'L8');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT8[]');
                  td.appendChild(ele);  
              }
              if (c == 9){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT9');
                  ele.setAttribute('placeholder', 'L9');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT9[]');
                  td.appendChild(ele);  
              }
              if (c == 10){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT10');
                  ele.setAttribute('placeholder', 'L10');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'LT10[]');
                  td.appendChild(ele);  
              }
              if (c == 11){
                var ele = document.createElement('select');
                  ele.setAttribute('required','true');
                  ele.setAttribute('name', 'unidad[]');

                  var OPT0 = document.createElement('option');
                  OPT0.setAttribute('selected', 'selected');
                  OPT0.setAttribute('value','');
                  OPT0.setAttribute('disabled','true');

                  var OPT1 = document.createElement('option');
                  OPT1.setAttribute('value','µSv');

                  var OPT2 = document.createElement('option');
                  OPT2.setAttribute('value','mSv');

                  var OPT3 = document.createElement('option');
                  OPT3.setAttribute('value','Sv');

                  var OPT4 = document.createElement('option');
                  OPT4.setAttribute('value','R');

                  var OPT5 = document.createElement('option');
                  OPT5.setAttribute('value','mR');

                  var OPT6 = document.createElement('option');
                  OPT6.setAttribute('value','µR');

                  var OPT7 = document.createElement('option');
                  OPT7.setAttribute('value','rem');

                  var OPT8 = document.createElement('option');
                  OPT8.setAttribute('value','mrem');

                  OPT0.appendChild( document.createTextNode( 'Selected' ) );
                  OPT1.appendChild( document.createTextNode( 'µSv' ) );
                  OPT2.appendChild( document.createTextNode( 'mSv' ) );
                  OPT3.appendChild( document.createTextNode( 'Sv' ) );
                  OPT4.appendChild( document.createTextNode( 'R' ) );
                  OPT5.appendChild( document.createTextNode( 'mR' ) );
                  OPT6.appendChild( document.createTextNode( 'µR' ) );
                  OPT7.appendChild( document.createTextNode( 'rem' ) );
                  OPT8.appendChild( document.createTextNode( 'mrem' ) );

                  ele.appendChild(OPT0);
                  ele.appendChild(OPT1);
                  ele.appendChild(OPT2);
                  ele.appendChild(OPT3);
                  ele.appendChild(OPT4);
                  ele.appendChild(OPT5);
                  ele.appendChild(OPT6);
                  ele.appendChild(OPT7);
                  ele.appendChild(OPT8);


                  td.appendChild(ele); 
                  for (let index = 1; index <=10; index++) {
                    $("input.LT"+index).bind('keypress', function(event) {
                      var regex = new RegExp("^[0-9|\./]+$");
                      var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
                      if (!regex.test(key)) {
                        event.preventDefault();
                        return false;
                      }
                    });
                  };
              }
              }
            }
          };
  </script>