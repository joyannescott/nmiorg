var $TABLE = $('#table');
var $BTN = $('#export-btn');
var $EXPORT = $('#export');

$('.ritual-add').click(function () {
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
  var headers = [
            "assembly",
            "name",
            "initiated",
            "office",
            "go",
            "master",
            "category",
            "bow",
            "day",
            "time"];
  var data = [];
  
  // Get the headers (add special header logic here)
  //$($rows.shift()).find('th:not(:empty)').each(function () {
  //  headers.push($(this).text().toLowerCase());
  //});

  
  
  // Turn all existing rows into a loopable array
  $rows.each(function () {
    var $td = $(this).find('td');
    var h = {};

    if($td.eq(0).text() != ""){

      // Use the headers from earlier to name our hash keys
      headers.forEach(function (header, i) {
        switch(header) {
          case "master":
              h[header] = $td.eq(i).find('input:checked').is(':checked');
              break;
          case "category":
              h[header] = $td.eq(i).find('option:selected').text();
             break;
          default:
              h[header] = $td.eq(i).text(); 
              break;
        }  
      });     
      data.push(h);
    }
  });
  
  // Output the result
  //$EXPORT.text(JSON.stringify(data));
  //console.log("posting data");
  //$.post(table_url, {json: JSON.stringify(data)}, function(data){ alert(data); });
  $.post(table_url, {json: JSON.stringify(data)});
});