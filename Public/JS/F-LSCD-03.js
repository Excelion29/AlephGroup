
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