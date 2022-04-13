function addRow() {
    var empTab = document.getElementById('empTable');
    var rowCnt = empTab.rows.length;
    var tr = empTab.insertRow(rowCnt);
    tr = empTab.insertRow(rowCnt);

    for (var c = 0; c < arrHead.length; c++) {
        var td = document.createElement('td');
        td = tr.insertCell(c);
        if (c == 0) {              
            var button = document.createElement('input');
            button.setAttribute('type', 'button');
            button.setAttribute('value', '✖');
            button.setAttribute('rel', 'tooltip');
            button.setAttribute('class', 'btn btn-primary btn-icon btn-sm');
            button.setAttribute('onclick', 'removeRow(this)');
            td.appendChild(button);
            
        }
        if (c == 1){
            var ele = document.createElement('input');
              ele.setAttribute('type', 'text');
              ele.setAttribute('class', 'form-control');     
              ele.setAttribute('placeholder', 'Tasa');
              ele.setAttribute('required','true');
              ele.setAttribute('id', 'tasaVCV'); 	
              ele.setAttribute('name', 'tasaVCV[]'); 	
              td.appendChild(ele);
        }
        if (c == 2){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT1');
            ele.setAttribute('placeholder', 'L1');
            ele.setAttribute('required','true');
            ele.setAttribute('id', 'LT1');
            ele.setAttribute('name', 'LT1[]');
            td.appendChild(ele);     
            

        }
        if (c == 3){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT2');
            ele.setAttribute('placeholder', 'L2');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT2[]');
            td.appendChild(ele);           
        }
        if (c == 4){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT3');
            ele.setAttribute('placeholder', 'L3');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT3[]');
            td.appendChild(ele);            
        }
        if (c == 5){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT4');
            ele.setAttribute('placeholder', 'L4');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT4[]');
            td.appendChild(ele);            
        }
        if (c == 6){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT5');
            ele.setAttribute('placeholder', 'L5');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT5[]');
            td.appendChild(ele);            
        }
        if (c == 7){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT6');
            ele.setAttribute('placeholder', 'L6');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT6[]');
            td.appendChild(ele);            
        }
        if (c == 8){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT7');
            ele.setAttribute('placeholder', 'L7');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT7[]');
            td.appendChild(ele);            
        }
        if (c == 9){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT8');
            ele.setAttribute('placeholder', 'L8');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT8[]');
            td.appendChild(ele);  
        }
        if (c == 10){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT9');
            ele.setAttribute('placeholder', 'L9');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT9[]');
            td.appendChild(ele);  
        }
        if (c == 11){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control LT10');
            ele.setAttribute('placeholder', 'L10');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT10[]');
            td.appendChild(ele);  
        }
        if (c == 12){
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
    };
     
};
function removeRow(oButton) {
    var empTab = document.getElementById('empTable');
    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);
};

