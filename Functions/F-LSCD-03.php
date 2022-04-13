    <div class="container-fluid" >
      <div class="row text-center">
        <div class="col-3 border">
          <div class="content" style="overflow-x: auto;white-space: nowrap;">
          <div class="modal-header">
              <h5 class="modal-title">Respuesta</h5>
            </div>
            <form name="formLSCD03" method="POST">
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
            </form>
          </div>
        </div>
        <div class="col-9 border">
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
                          echo '<td>'.($key+1).'</td>';
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
        </div>
      </div>
    </div>
<script src="./Public/JS/F-LSCD-03.js"></script>
<script src="./Public/JS/table-create03.js"></script>
