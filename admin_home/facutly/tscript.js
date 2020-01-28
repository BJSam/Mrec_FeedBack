var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');
var tabledata;

$('.table-add').click(function () {
  var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
  $TABLE.find('table').append($clone);
});

$('.table-remove').click(function () {
  $(this).parents('tr').detach();
});

$('.table-up').click(function () {
  var $row = $(this).parents('tr');
  if ($row.index() === 1) return; // Don't go above the header
  $row.prev().before($row.get(0));
});

$('.table-down').click(function () {
  var $row = $(this).parents('tr');
  $row.next().after($row.get(0));
});

// A few jQuery helpers for exporting only
jQuery.fn.pop = [].pop;
jQuery.fn.shift = [].shift;

$BTN.click(function () {
  var $rows = $TABLE.find('tr:not(:hidden)');
  var headers = [];
  var data = [];
  
  // Get the headers (add special header logic here)
  $($rows.shift()).find('th:not(:empty)').each(function () {
    headers.push($(this).text().toLowerCase());
  });
  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};
    
    // Use the headers from earlier to name our hash keys
    headers.forEach(function (header, i) {
      h[header] = $td.eq(i).text();   
    });
    
    data.push(h);
  });
  
  // Output the result
  //$EXPORT.text(JSON.stringify(data));
  
  tabledata=JSON.stringify(data);
  console.log(tabledata);
  var k="undefined";
  var kk="";
  var kkk=" ";
  var out="<div class='table-responsive tableFixHead' ><table class='table table-striped' ><thead><tr><th class='text-center'><h2>Faculty</h1></th><th class='text-center'><h2>Subject</h1></th></tr></thead>";
   if(tabledata.includes(k) || tabledata.includes(kk) || tabledata.includes(kkk))
   {
	   Swal.fire({
  type: 'error',
  title: 'table error',
  text: 'data missing',
})
	   
   }
   else{
	   for(i=0;i<data.length;i++)
	   {
		   out=out+"<tbody'><tr><td><h5>"+data[i].fn+"</h5></td>";
		    out=out+"<td><h5>"+data[i].sub+"</h5></td></tr></tbody>";
		   
	   }
	   out=out+'</table></div>'
	   console.log(out);
	   
	   Swal.fire({
  html: out,
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'confirm',
}).then((result) => {
  if (result.value) {
    Swal.fire(
	'success!',
      'data saved',
      'success'
    )
  }
})
	   
	   
	  
   }
   
   
  
});