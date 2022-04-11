var arrHead = new Array();
arrHead = ['Tasa VCV','Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10', 'Unidad'];
      
var jsvar = jQuery.parseJSON(data);
var conv_u = [1000,1000000,10000,10,0.01,10000,10,1000000];

var arrHeadLSCD12 = new Array();
arrHeadLSCD12 = ['','Tasa VCV','Lectura 1', 'Lectura 2','Lectura 3', 'Lectura 4', 'Lectura 5', 'Lectura 6', 'Lectura 7', 'Lectura 8', 'Lectura 9', 'Lectura 10','Lectura Mínima', 'Unidad',"Promedio","D.S.","C.V.","Factor K","Var. Resp(%)","Incert(%)","Test"];
var arrayLt = new Array();
var unidad = new Array();
var promedio = new Array();
var desv_stand = new Array();
var lect_min = new Array();
var suma =0;
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
          };
          desv_stand[position] ={
            "desv_stand" : dev(promedioLT(position))
          };
          lect_min[position] ={
            "lect_min" : (decimales(Math.min.apply(null,promedioLT(position))))
          };     
          // console.log(Math.min.apply(null,promedioLT(position)));
      };
      addRowRLSCD012();       
    });
  });
  
  function promedioLT(position){ 
    var data = Object.values(arrayLt[position]);
    return data;
  };
  
  function decimales(dato){
    var decimales = String(dato).split(".");  
    var minimo = 1/(10**parseInt(decimales.length));   
    return minimo;
  }
  
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


  function createTableRptLSCD012(){
    var LSCD12 = document.createElement('table');
    LSCD12.setAttribute('id', 'TableLSCD12');
    LSCD12.setAttribute('mame', 'TableLSCD12');
    LSCD12.setAttribute('class', 'table table-striped table-bordered table-sm dt-responsive');
    LSCD12.setAttribute('width', '100%');
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
    for (let s = 0; s < jsvar.length; s++) {
      var tr = empTab.insertRow(rowCnt);
      var td = document.createElement('td'); 
      for (let c = 0; c < arrHeadLSCD12.length; c++) {
        td = tr.insertCell(c);
        if (c == 0) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode(s) );
          td.appendChild(ele);
        }  
        if (c == 1) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( jsvar[s] ) );
          td.appendChild(ele);
        }  
        if(c == 2) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT1']) );
          td.appendChild(ele);
        }
        if(c == 3) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT2']) );
          td.appendChild(ele);
        }
        if(c == 4) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT3']) );
          td.appendChild(ele);
        }
        if(c == 5) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT4']) );
          td.appendChild(ele);
        }
        if(c == 6) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT5']) );
          td.appendChild(ele);
        }
        if(c == 7) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT6']) );
          td.appendChild(ele);
        }
        if(c == 8) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT7']) );
          td.appendChild(ele);
        }
        if(c == 9) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT8']) );
          td.appendChild(ele);
        }
        if(c == 10) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT9']) );
          td.appendChild(ele);
        }
        if(c == 11) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( arrayLt[s]['LT10']) );
          td.appendChild(ele);
        }
        if(c == 12) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( lect_min[s]['lect_min']));
          td.appendChild(ele);
        }
        if(c == 13) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( unidad[s]['Unidad']) );
          td.appendChild(ele);
        }
        if(c == 14) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( promedio[s]['promedio']));
          td.appendChild(ele);
        }
        if(c == 15) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode((desv_stand[s]['desv_stand']).toFixed(2)));
          td.appendChild(ele);
        }
        if(c == 16) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( (desv_stand[s]['desv_stand']/promedio[s]['promedio']*100).toFixed(2)));
          td.appendChild(ele);
        }
        if(c == 17) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( factor_k(jsvar[s],unidad[s]['Unidad'], promedio[s]['promedio'])[0]) );
          td.appendChild(ele);
        }
        if(c == 18) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( factor_k(jsvar[s],unidad[s]['Unidad'], promedio[s]['promedio'])[1]) );
          td.appendChild(ele);
        }
        if(c == 19) {
          var ele = document.createElement('p');
          td.appendChild(ele);
        }
        if(c == 20) {
          var ele = document.createElement('p');
          ele.appendChild( document.createTextNode( factor_k(jsvar[s],unidad[s]['Unidad'], promedio[s]['promedio'])[2]) );
          td.appendChild(ele);
        }
        else{            
        }
      }
    }    
  };

  function factor_k (tasaVCV,unidadtasa,promedio){
    if (unidadtasa == "µSv") {
      Factor_K = (tasaVCV/promedio);
      Var_resp = (promedio/tasaVCV-1)*100;  
      if ( promedio<=(tasaVCV+10/100*tasaVCV) &&  promedio>=(tasaVCV-10/100*tasaVCV) && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      }    

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "mSv") {
      Factor_K = tasaVCV/(promedio*conv_u[0]);
      Var_resp = ((promedio*conv_u[0])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[0] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[0] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "Sv") {
      Factor_K = tasaVCV/(promedio*conv_u[1]);
      Var_resp = ((promedio*conv_u[1])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[1] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[1] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%")],test;
    } 
    if (unidadtasa == "R") {
  
      Factor_K = tasaVCV/(promedio*conv_u[2]);
      Var_resp = ((promedio*conv_u[2])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[2] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[2] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "mR") {
  
      Factor_K = tasaVCV/(promedio*conv_u[3]);
      Var_resp = ((promedio*conv_u[3])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[3] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[3] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "µR") {
  
      Factor_K = tasaVCV/(promedio*conv_u[4]);
      Var_resp = ((promedio*conv_u[4])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[4] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[4] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 
      
      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "rem") {
  
      Factor_K = tasaVCV/(promedio*conv_u[5]);
      Var_resp = ((promedio*conv_u[5])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[5] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[5] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    if (unidadtasa == "mrem") {
  
      Factor_K = tasaVCV/(promedio*conv_u[6]);
      Var_resp = ((promedio*conv_u[6])/tasaVCV-1)*100;
      if ( promedio<=(tasaVCV+10/100*tasaVCV)*conv_u[6] &&  promedio>=(tasaVCV-10/100*tasaVCV)*conv_u[6] && tasaVCV<=10/100) {
        test = "ok";
      } else {
        test = "out"; 
      } 

      return [Factor_K,(Var_resp.toFixed(0)+"%"),test];
    } 
    else {
      Factor_K = "Variable no encontrada";
      Var_resp = "Variable no encontrada";
      test = "Variable no encontrada"; 
      return [Factor_K,Var_resp,test];
    }
  };