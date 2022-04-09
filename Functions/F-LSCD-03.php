

  <body onload="createTableLSCD036();createTableLSCD012();createTableRptLSCD012();">
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
      <div class="col-8 border">
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
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row text-center">
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
              <input type="submit" class="button btn btn-primary btn-round" value="Guardar">
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="container-fluid" >
    <div class="row text-center">
        <div class="swiper-slide">
          <div class="card-body">
            <div class="card-header">
              <h5 class="title">Respuesta</h5>
            </div>
            <div class="card-body">
              <div class="author">
                <div id="contRLSCD012" class="table-responsive">

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
      <!-- <div class="content" style="margin-top:7%;" style=" width: 30em;overflow-x: auto;white-space: nowrap;">
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
                 

              </tbody>
          </table>
      </div> -->
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
            th.setAttribute('class','col-sm-0');
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
                  ele.setAttribute('id', 'LT1'+s);
                  ele.setAttribute('name', 'LT1[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);     
                  

              }
              if (c == 2){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT2');
                  ele.setAttribute('placeholder', 'L2');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT2'+s);
                  ele.setAttribute('name', 'LT2[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);           
              }
              if (c == 3){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT3');
                  ele.setAttribute('placeholder', 'L3');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT3'+s);
                  ele.setAttribute('name', 'LT3[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);            
              }
              if (c == 4){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT4');
                  ele.setAttribute('placeholder', 'L4');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT4'+s);
                  ele.setAttribute('value','0.01');
                  ele.setAttribute('name', 'LT4[]');
                  td.appendChild(ele);            
              }
              if (c == 5){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT5');
                  ele.setAttribute('placeholder', 'L5');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT5'+s);
                  ele.setAttribute('value','0.01');
                  ele.setAttribute('name', 'LT5[]');
                  td.appendChild(ele);            
              }
              if (c == 6){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT6');
                  ele.setAttribute('placeholder', 'L6');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT6'+s);
                  ele.setAttribute('name', 'LT6[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);            
              }
              if (c == 7){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT7');
                  ele.setAttribute('placeholder', 'L7');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT7'+s);
                  ele.setAttribute('name', 'LT7[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);            
              }
              if (c == 8){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT8');
                  ele.setAttribute('placeholder', 'L8');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT8'+s);
                  ele.setAttribute('name', 'LT8[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);  
              }
              if (c == 9){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT9');
                  ele.setAttribute('placeholder', 'L9');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT9'+s);
                  ele.setAttribute('name', 'LT9[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);  
              }
              if (c == 10){
                var ele = document.createElement('input');
                  ele.setAttribute('type', 'text');
                  ele.setAttribute('class', 'form-control LT10');
                  ele.setAttribute('placeholder', 'L10');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'LT10'+s);
                  ele.setAttribute('name', 'LT10[]');
                  ele.setAttribute('value','0.01');
                  td.appendChild(ele);  
              }
              if (c == 11){
                var ele = document.createElement('select');
                  ele.setAttribute('required','true');
                  ele.setAttribute('id', 'unidad'+s);
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
  <script>
    var arrHeadLSCD12 = new Array();
    arrHeadLSCD12 = ['Tasa VCV','Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10', 'Unidad',"Promedio","D.S.","C.V.","Factor K"];
    var arrayLt = new Array();
    var unidad = new Array();
    var promedio = new Array();
    var desv_stand = new Array();
    var suma =0;
    $(function() {
      $(".button").click(function() {
        
        for (let position = 0; position < jsvar.length; position++) {
            arrayLt[position] ={
              "LT1" : parseFloat(document.getElementById('LT1'+position).value),
              "LT2" : parseFloat(document.getElementById('LT2'+position).value),
              "LT3" : parseFloat(document.getElementById('LT3'+position).value),
              "LT4" : parseFloat(document.getElementById('LT4'+position).value),
              "LT5" : parseFloat(document.getElementById('LT5'+position).value),
              "LT6" : parseFloat(document.getElementById('LT6'+position).value),
              "LT7" : parseFloat(document.getElementById('LT7'+position).value),
              "LT8" : parseFloat(document.getElementById('LT8'+position).value),
              "LT9" : parseFloat(document.getElementById('LT9'+position).value),
              "LT10" : parseFloat(document.getElementById('LT10'+position).value),
            };
            unidad[position] ={
              "Unidad" : document.getElementById('unidad'+position).value,
            };

            var lengthLT = Object.keys(arrayLt[position]).length;
            promedio[position] ={
              "promedio" : (promedioLT(position)[0]+promedioLT(position)[1]+promedioLT(position)[2]+promedioLT(position)[3]+promedioLT(position)[4]+promedioLT(position)[5]+promedioLT(position)[6]+promedioLT(position)[7]+promedioLT(position)[8]+promedioLT(position)[9]).toFixed(2)/lengthLT
            }
            desv_stand[position] ={
              "desv_stand" : dev(promedioLT(position))
            }
            
            
        };
        addRowRLSCD012();
      });
    });
    
    function promedioLT(position){ 
      var data = Object.values(arrayLt[position]);
      return data;
    };
    function dev(arr){
      // Creating the mean with Array.reduce
      let mean = arr.reduce((acc, curr)=>{
        return acc + curr
      }, 0) / arr.length;
      
      // Assigning (value - mean) ^ 2 to every array item
      arr = arr.map((k)=>{
        return (k - mean) ** 2
      })
      
      // Calculating the sum of updated array
      let sum = arr.reduce((acc, curr)=> acc + curr, 0);
        
      // Calculating the variance
      let variance = sum / arr.length
        
      // Returning the Standered deviation
      return Math.sqrt(sum / arr.length)
    };
    function precise(x) {
      return x.toPrecision(4);
    }
    var LSCD12 = document.createElement('table');
    function createTableRptLSCD012(){
        LSCD12.setAttribute('id', 'TableLSCD12');
        LSCD12.setAttribute('mame', 'TableLSCD12');
        LSCD12.setAttribute('class', 'table table-striped table-bordered table-sm dt-responsive');
        LSCD12.setAttribute('width', '100%');
        var thead = document.createElement('thead');
        var tr = LSCD12.insertRow(-1);
        for (let h = 0; h < arrHeadLSCD12.length; h++) {
          var th = document.createElement('th');
            th.setAttribute('class','col-sm-1');
            th.innerHTML = arrHeadLSCD12[h];
            tr.appendChild(th);     
          }
        var div = document.getElementById('contRLSCD012');
        div.appendChild(LSCD12);  
    }
    function addRowRLSCD012(){
      var empTab = document.getElementById('TableLSCD12');
      var rowCnt = empTab.rows.length;
      var tr = empTab.insertRow(rowCnt); 
      var suma_arrays = 0; 
      for (let s = 0; s < jsvar.length; s++) {
        var tr = LSCD12.insertRow(rowCnt);
        var td = document.createElement('td'); 
        for (let c = 0; c < arrHeadLSCD12.length; c++) {
          td = tr.insertCell(c);
          if (c == 0) {
                var ele = document.createElement('p');
                ele.appendChild( document.createTextNode( jsvar[s] ) );
                td.appendChild(ele);
          }  
          if(c == 1) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT1']) );
            td.appendChild(ele);
          }
          if(c == 2) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT2']) );
            td.appendChild(ele);
          }
          if(c == 3) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT3']) );
            td.appendChild(ele);
          }
          if(c == 4) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT4']) );
            td.appendChild(ele);
          }
          if(c == 5) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT5']) );
            td.appendChild(ele);
          }
          if(c == 6) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT6']) );
            td.appendChild(ele);
          }
          if(c == 7) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT7']) );
            td.appendChild(ele);
          }
          if(c == 8) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT8']) );
            td.appendChild(ele);
          }
          if(c == 9) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT9']) );
            td.appendChild(ele);
          }
          if(c == 10) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( arrayLt[s]['LT10']) );
            td.appendChild(ele);
          }
          if(c == 11) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( unidad[s]['Unidad']) );
            td.appendChild(ele);
          }
          if(c == 12) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( promedio[s]['promedio']));
            td.appendChild(ele);
          }
          if(c == 13) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode(precise(desv_stand[s]['desv_stand'])));
            td.appendChild(ele);
          }
          if(c == 14) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( precise(desv_stand[s]['desv_stand']/promedio[s]['promedio']*100)));
            td.appendChild(ele);
          }
          if(c == 15) {
            var ele = document.createElement('p');
            ele.appendChild( document.createTextNode( factor_k(jsvar[s],unidad[s]['Unidad'], promedio[s]['promedio'])) );
            td.appendChild(ele);
          }
          else{            
          }

        }
      }    
    };
    var conv_u = [1000,1000000,10000,10,0.01,10000,10,1000000];
    function factor_k (tasaVCV,unidadtasa,promedio){
      var Factor_K = 0;
      if (unidadtasa = "µSv") {
        Factor_K = (tasaVCV/promedio)*conv_u[0];
      } 
      if (unidadtasa = "mSv") {
        Factor_K = (tasaVCV/promedio)*conv_u[1];
      } 
      if (unidadtasa = "Sv") {
        Factor_K = (tasaVCV/promedio)*conv_u[2];
      } 
      if (unidadtasa = "R") {

        Factor_K = (tasaVCV/promedio)*conv_u[3];
      } 
      if (unidadtasa = "mR") {

        Factor_K = (tasaVCV/promedio)*conv_u[4];
      } 
      if (unidadtasa = "µR") {

        Factor_K = (tasaVCV/promedio)*conv_u[5];
      } 
      if (unidadtasa = "rem") {

        Factor_K = (tasaVCV/promedio)*conv_u[6];
      } 
      if (unidadtasa =   "mrem") {

        Factor_K = (tasaVCV/promedio)*conv_u[7];
      } 
      else {
        Factor_K = "Variable no encontrada";
      }
      return Factor_K;
    };
  </script>