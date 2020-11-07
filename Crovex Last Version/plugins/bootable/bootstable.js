async function customers() {
  let customersArray = [];
  let data = await fetch('customers_connect.php');
  let result = await data.json();
  result.map(customer => {
    customersArray.push(customer.first_name + ' ' + customer.last_name);
  });
  return customersArray;
}

async function yarn() {
  let data = await fetch('yarn_connect.php');
  yarnArray = [];
  let result = await data.json();
  result.map(yarn => {
    if (yarn.yarn_type !== '') {
      yarnArray.push(yarn.yarn_type);
    }
  });
  return yarnArray;
}

var saveColHtml =
  '<button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2" style="display:none;" onclick="rowEdit(this);">' +
  '<i class="dripicons-pencil"></i>' +
  '</button>' +
  '<button id="bElim" type="button" class="btn btn-sm btn-soft-danger btn-circle" style="display:none;" onclick="rowElim(this);">' +
  '<i class="dripicons-trash" aria-hidden="true"></i>' +
  '</button>' +
  '<button id="bAcep" type="button" class="btn btn-sm btn-soft-purple mr-2 btn-circle"   onclick="rowAcep(this);">' +
  '<i class="dripicons-checkmark"></i>' +
  '</button>' +
  '<button id="bCanc" type="button" class="btn btn-sm btn-soft-info btn-circle"  onclick="rowCancel(this);">' +
  '<i class="dripicons-cross" aria-hidden="true"></i>' +
  '</button>';

var newColHtml =
  '<button id="bEdit" type="button" class="btn btn-sm btn-soft-success btn-circle mr-2"  onclick="rowEdit(this);">' +
  '<i class="dripicons-pencil"></i>' +
  '</button>' +
  '<button id="bElim" type="button" class="btn btn-sm btn-soft-danger btn-circle"  onclick="rowElim(this);">' +
  '<i class="dripicons-trash" aria-hidden="true"></i>' +
  '</button>' +
  '<button id="bAcep" type="button" class="btn btn-sm btn-soft-purple mr-2 btn-circle"  style="display:none;" onclick="rowAcep(this);">' +
  '<i class="dripicons-checkmark"></i>' +
  '</button>' +
  '<button id="bCanc" type="button" class="btn btn-sm btn-soft-info btn-circle" style="display:none;"  onclick="rowCancel(this);">' +
  '<i class="dripicons-cross" aria-hidden="true"></i>' +
  '</button>';

let $add = false;

function initAdd() {
  rowAddNew('datatable-basic');
  // cls();
}

// function cls() {
//   console.log(document.getElementById('simple_select'));
// }

function onAdd(row) {
  let updatedValues = [];
  let arr = Array.from(row[0].childNodes);
  let newArr = arr.map(arrItem => {
    return arrItem.innerHTML;
  });
  newArr.pop();
  newArr.push(newColHtml);
  newArrObj = Object.assign({}, newArr);

  newArrObj[1] = document.getElementById('simple_select').options[
    document.getElementById('simple_select').selectedIndex
  ].value;

  console.log(newArrObj);

  var $tab_en_edic = $('#datatable-basic');
  if ($tab_en_edic.length === 0) {
    console.log('Customer Logic Here');
  } else {
    if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
      fetch('insertcode.php', {
        method: 'POST',
        body: JSON.stringify({ ...newArrObj, view: 'stock-yarn' }),
      }).then(res => console.log(res));
    } else if ($tab_en_edic[0].baseURI.includes('stock-orders.php')) {
      fetch('insertcode.php', {
        method: 'POST',
        body: JSON.stringify({ ...newArrObj, view: 'stock-orders' }),
      }).then(res => console.log(res));
    } else {
      fetch('insertcode.php', {
        method: 'POST',
        body: JSON.stringify({ ...newArrObj, view: 'stock-fabric' }),
      }).then(res => console.log(res));
    }
  }
}

function rowEdit(but) {
  var $td = $("tr[id='editing'] td");
  rowAcep($td);
  var $row = $(but).parents('tr');
  var $cols = $row.find('td');
  if (ModoEdicion($row)) return;
  IterarCamposEdit($cols, function ($td) {
    var cont = $td.html();
    var div = '<div style="display: none;">' + cont + '</div>';
    var input = '<input class="form-control input-sm"  value="' + cont + '">';
    $td.html(div + input);
  });
  FijModoEdit(but);
}

function onDelete(row) {
  var $tab_en_edic = $('#datatable-basic');
  if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
    }).then(result => {
      if (result.value) {
        Swal.fire('Deleted!', 'Your record has been deleted.', 'success');
        let id = parseInt(row[0].firstChild.innerHTML);
        row.remove();
        fetch('deletecode.php', {
          method: 'POST',
          body: JSON.stringify({ id, view: 'stock-yarn' }),
        });
      }
    });
  } else if ($tab_en_edic[0].baseURI.includes('stock-fabric.php')) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
    }).then(result => {
      if (result.value) {
        Swal.fire('Deleted!', 'Your record has been deleted.', 'success');
        let id = parseInt(row[0].firstChild.innerHTML);
        row.remove();
        fetch('deletecode.php', {
          method: 'POST',
          body: JSON.stringify({ id, view: 'stock-fabric' }),
        });
      }
    });
  } else {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!',
    }).then(result => {
      if (result.value) {
        Swal.fire('Deleted!', 'Your record has been deleted.', 'success');
        let id = parseInt(row[0].firstChild.innerHTML);
        row.remove();
        fetch('deletecode.php', {
          method: 'POST',
          body: JSON.stringify({ id, view: 'stock-orders' }),
        });
      }
    });
  }
}

function onEdit(row) {
  let updatedValues = [];
  let arr = Array.from(row[0].childNodes);
  let newArr = arr.map(arrItem => {
    return arrItem.innerHTML;
  });
  newArr.pop();
  newArrObj = Object.assign({}, newArr);

  var $tab_en_edic = $('#datatable-basic');
  if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
    fetch('updatecode.php', {
      method: 'POST',
      body: JSON.stringify({ ...newArrObj, view: 'stock-yarn' }),
    }).then(res => console.log(res));
  } else if ($tab_en_edic[0].baseURI.includes('stock-orders.php')) {
    fetch('updatecode.php', {
      method: 'POST',
      body: JSON.stringify({ ...newArrObj, view: 'stock-orders' }),
    }).then(res => console.log(res));
  } else {
    fetch('updatecode.php', {
      method: 'POST',
      body: JSON.stringify({ ...newArrObj, view: 'stock-fabric' }),
    }).then(res => console.log(res));
  }
}

function ModoEdicion($row) {
  if ($row.attr('id') == 'editing') {
    return true;
  } else {
    return false;
  }
}

function IterarCamposEdit($cols, tarea) {
  var n = 0;
  $cols.each(function () {
    n++;
    var $tab_en_edic = $('#datatable-basic');
    if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
      if (n == 1 || n == 10) return;
    } else if ($tab_en_edic[0].baseURI.includes('stock-fabric.php')) {
      if (n == 1 || n == 12) return;
    } else {
      if (n == 1 || n == 2 || n == 14) return;
    }
    tarea($(this));
  });
}

function FijModoEdit(but) {
  $(but).parent().find('#bAcep').show();
  $(but).parent().find('#bCanc').show();
  $(but).parent().find('#bEdit').hide();
  $(but).parent().find('#bElim').hide();
  var $row = $(but).parents('tr');
  $row.attr('id', 'editing');
}

function FijModoNormal(but) {
  $(but).parent().find('#bAcep').hide();
  $(but).parent().find('#bCanc').hide();
  $(but).parent().find('#bEdit').show();
  $(but).parent().find('#bElim').show();
  var $row = $(but).parents('tr');
  $row.attr('id', '');
}

function rowAcep(but) {
  var $row = $(but).parents('tr');
  var $cols = $row.find('td');

  // console.log($cols[1].innerHTML);

  // newArrObj[1] = document.getElementById('simple_select').options[
  //   document.getElementById('simple_select').selectedIndex
  // ].value;

  // console.log(newArrObj);
  if (!ModoEdicion($row)) return;
  IterarCamposEdit($cols, function ($td) {
    var cont = $td.find('input').val();
    $td.html(cont);
  });
  FijModoNormal(but);
  if ($add) {
    onAdd($row);
    $add = false;
  } else {
    onEdit($row);
  }
}

function rowCancel(but) {
  var $row = $(but).parents('tr');
  var $cols = $row.find('td');
  if (!ModoEdicion($row)) return;
  IterarCamposEdit($cols, function ($td) {
    var cont = $td.find('div').html();
    $td.html(cont);
  });
  FijModoNormal(but);
}

function rowElim(but) {
  var $row = $(but).parents('tr');
  onDelete($row);
}

function rowAddNew(tabId) {
  var $tab_en_edic = $('#' + tabId);
  var $filas = $tab_en_edic.find('tbody tr');
  var $fila = $tab_en_edic.find('tbody');
  if ($filas.length == 0) {
  } else {
    if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
      var $ultFila = $fila.find('tr:last');
      $id = parseInt($($ultFila[0]).find('td:first')[0].innerHTML);
      $id++;
      $ultFila.clone().appendTo($ultFila.parent());
      $fila.find('tr:last').attr('id', 'editing');
      $ultFila = $fila.find('tr:last');
      var $cols = $ultFila.find('td');
      var $firstCol = $ultFila.find('td:first');
      $cols.each(function () {
        var div = '<div style="display: none;"></div>';
        var input = '<input class="form-control input-sm"  value="">';
        $(this).html(div + input);
      });
      $date = new Date();
      let formatted_date =
        $date.getFullYear() +
        '-' +
        ($date.getMonth() + 1) +
        '-' +
        $date.getDate();
      $ultFila.find('td:first').html($id);
      $option = '';
      customers().then(value => {
        $ultFila.find('td:nth-of-type(2)').html(
          "<select id='simple_select' class='form-control cust' data-toggle='select' title='Simple select' data-live-search='true' data-live-search-placeholder='Search ...'>" +
            value.map(customer => {
              $option += '<option>' + customer + '</option>';
            }) +
            $option +
            '</select>'
        );
      });
      // $ultFila.find('td:last').html(saveColHtml);
      $ultFila.find('td:nth-of-type(6)').html(formatted_date);
      $ultFila.find('td:last').html(saveColHtml);
    } else if ($tab_en_edic[0].baseURI.includes('stock-orders.php')) {
      var $ultFila = $fila.find('tr:last-child');
      console.log($ultFila.find('td:nth-of-type(2)')[0]);
      $id = parseInt($($ultFila[0]).find('td:first-child')[0].innerHTML);
      $id++;
      $ultFila.clone().appendTo($ultFila.parent());
      $fila.find('tr:last-child').attr('id', 'editing');
      $ultFila = $fila.find('tr:last-child');

      var $cols = $ultFila.find('td');
      var $firstCol = $ultFila.find('td:first-child');
      $cols.each(function () {
        var div = '<div style="display: none;"></div>';
        var input = '<input class="form-control input-sm"  value="">';
        $(this).html(div + input);
      });
      $date = new Date();
      let formatted_date =
        $date.getFullYear() +
        '-' +
        ($date.getMonth() + 1) +
        '-' +
        $date.getDate();
      let year = new Date()
        .getFullYear()
        .toString()
        .split('')
        .slice(2, 4)
        .join('');
      if ($id >= 1 && $id < 10) {
        $ord = 'OR-' + year + '-00' + $id;
      } else if ($id >= 10 && $id < 100) {
        $ord = 'OR-' + year + '-0' + $id;
      } else {
        $ord = 'OR-' + year + '-' + $id;
      }
      $ultFila.find('td:first').html($id);
      $ultFila.find('td:nth-of-type(2)').html($ord);
      $option = '';
      customers().then(value => {
        $ultFila.find('td:nth-of-type(3)').html(
          "<select id='simple_select' class='form-control cust' data-toggle='select' title='Simple select' data-live-search='true' data-live-search-placeholder='Search ...'>" +
            value.map(customer => {
              $option += '<option>' + customer + '</option>';
            }) +
            $option +
            '</select>'
        );
      });
      $ultFila.find('td:nth-of-type(10)').html(formatted_date);
      $ultFila.find('td:last').html(saveColHtml);
    } else {
      var $ultFila = $fila.find('tr:last-child');
      $id = parseInt($($ultFila[0]).find('td:first-child')[0].innerHTML);
      $id++;
      $date = new Date();
      let formatted_date =
        $date.getFullYear() +
        '-' +
        ($date.getMonth() + 1) +
        '-' +
        $date.getDate();
      $ultFila.clone().appendTo($ultFila.parent());
      $fila.find('tr:last-child').attr('id', 'editing');
      $ultFila = $fila.find('tr:last-child');
      var $cols = $ultFila.find('td');
      var $firstCol = $ultFila.find('td:first-child');
      $cols.each(function () {
        var div = '<div style="display: none;"></div>';
        var input = '<input class="form-control input-sm"  value="">';
        $(this).html(div + input);
      });
      $ultFila.find('td:first').html($id);
      $option = '<option> </option>';
      $option2 = '<option> </option>';
      // customers().then(value => {
      // $ultFila.find('td:nth-of-type(2)').html(
      //   "<select id='simple_select' class='form-control cust' data-toggle='select' title='Simple select' data-live-search='true' data-live-search-placeholder='Search ...'>" +
      //     value.map(customer => {
      //       $option += '<option>' + customer + '</option>';
      //     }) +
      //     $option +
      //     '</select>'
      // );
      document.getElementById('simple_select').style.display = 'block';
      $ultFila
        .find('td:nth-of-type(2)')
        .html('')
        // .append('<select><option>Test</option></select>');
        .append(document.getElementById('simple_select'));
      // });
      console.log(document.getElementById('simple_select'));
      // yarn().then(value => {
      document.getElementById('yarn_select').style.display = 'block';
      $ultFila
        .find('td:nth-of-type(3)')
        .html('')
        // .append('<select><option>Test</option></select>');
        .append(document.getElementById('yarn_select'));
      // $ultFila.find('td:nth-of-type(3)').html(
      //   "<select id='yarn_select' class='form-control cust' data-toggle='select' title='Simple select' data-live-search='true' data-live-search-placeholder='Search ...'>" +
      //     value.map(yarn => {
      //       $option2 += '<option>' + yarn + '</option>';
      //     }) +
      //     $option2 +
      //     '</select>'
      // );
      // });
      $ultFila.find('td:nth-of-type(6)').html(formatted_date);
      $ultFila.find('td:last').html(saveColHtml);
    }
  }
  $add = true;
}

console.log($('#simple_select'));

// function TableToCSV(tabId, separator) {
//   //Convierte tabla a CSV
//   var datFil = '';
//   var tmp = '';
//   var $tab_en_edic = $('#' + tabId); //Table source
//   $tab_en_edic.find('tbody tr').each(function () {
//     //Termina la edición si es que existe
//     if (ModoEdicion($(this))) {
//       $(this).find('#bAcep').click(); //acepta edición
//     }
//     var $cols = $(this).find('td'); //lee campos
//     datFil = '';
//     $cols.each(function () {
//       if ($(this).attr('name') == 'buttons') {
//         //Es columna de botones
//       } else {
//         datFil = datFil + $(this).html() + separator;
//       }
//     });
//     if (datFil != '') {
//       datFil = datFil.substr(0, datFil.length - separator.length);
//     }
//     tmp = tmp + datFil + '\n';
//   });
//   return tmp;
// }

// var $tab_en_edic = $('#datatable-basic');
// if ($tab_en_edic.length === 0) {
//   console.log('Customer Logic Here');
// } else {
//   if ($tab_en_edic[0].baseURI.includes('stock-yarn.php')) {
//     console.log('Stock Yarn Logic Here');
//   } else if ($tab_en_edic[0].baseURI.includes('order-fabric.php')) {
//     console.log('Order Fabric Logic Here');
//   } else {
//     console.log('Stock Fabric Logic Here');
//   }
// }
