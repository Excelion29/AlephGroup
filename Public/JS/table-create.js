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
              ele.setAttribute('name', 'tasaVCV[]'); 	
              td.appendChild(ele);
        }
        if (c == 2){
          var ele = document.createElement('p');
            td.appendChild(ele);
        }
        if (c == 3){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control');
            ele.setAttribute('placeholder', 'L1');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT1[]');
            td.appendChild(ele);           
        }
        if (c == 4){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control');
            ele.setAttribute('placeholder', 'L2');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT2[]');
            td.appendChild(ele);           
        }
        if (c == 5){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L3');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT3[]');
            td.appendChild(ele);            
        }
        if (c == 6){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L4');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT4[]');
            td.appendChild(ele);            
        }
        if (c == 7){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L5');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT5[]');
            td.appendChild(ele);            
        }
        if (c == 8){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L6');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT6[]');
            td.appendChild(ele);            
        }
        if (c == 9){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L7');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT7[]');
            td.appendChild(ele);            
        }
        if (c == 10){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L8');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT8[]');
            td.appendChild(ele);  
        }
        if (c == 11){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L9');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT9[]');
            td.appendChild(ele);  
        }
        if (c == 12){
          var ele = document.createElement('input');
            ele.setAttribute('type', 'text');
            ele.setAttribute('class', 'form-control ');
            ele.setAttribute('placeholder', 'L10');
            ele.setAttribute('required','true');
            ele.setAttribute('name', 'LT10[]');
            td.appendChild(ele);  
        }
        if (c == 13){
          var ele = document.createElement('p');
            td.appendChild(ele);  
        }
        if (c == 14){
          var ele = document.createElement('p');
            td.appendChild(ele);  
        }
        if (c == 15){
          var ele = document.createElement('p');
            td.appendChild(ele);  
        }
        if (c == 16){
          var ele = document.createElement('p');
            td.appendChild(ele);  
        } 
        if (c == 17){
          var ele = document.createElement('p');
            td.appendChild(ele);  
        }      
    }
};
function removeRow(oButton) {
    var empTab = document.getElementById('empTable');
    empTab.deleteRow(oButton.parentNode.parentNode.rowIndex);
};