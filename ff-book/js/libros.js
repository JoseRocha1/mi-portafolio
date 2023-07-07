function makeTable(data) {
  var tbl_body = "";
  $.each(data, function() {
    var tbl_row = "";
    $.each(this, function(k , v) {
      tbl_row += "<td>"+v+"</td>";
    })
    tbl_body += "<tr>"+tbl_row+"</tr>";
  })
  return tbl_body;
}

function getEmployeeFilterOptions() {
  var opts = [];
  $checkboxes.each(function() {
    if(this.checked) {
      opts.push(this.name);
    }
  });

  return opts;

}

function updateEmployees(opts) {
  $.ajax({
    type: "POST",
    url: "submit.php",
    dataType : 'json',
    cache: false,
     data: {filterOpts: opts},
     success: function(records) {
      $('#books tbody').html(makeTable(records));
    }
  });
}

var $checkboxes = $("input:checkbox");
$checkboxes.on("change", function() {
  var opts = getEmployeeFilterOptions();
  updateEmployees(opts);
});
updateEmployees();