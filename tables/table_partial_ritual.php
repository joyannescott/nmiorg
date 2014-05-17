  <div id="table" class="table-editable ritual">
    <span class="ritual-add glyphicon glyphicon-plus"></span>
    <table class="table table-centered table-bordered table-hover"><center>
      <tr>
          <?php if($assembly == 0) {?>
            <th rowspan="2">A</th>
          <?php } ?>  
          <th rowspan="2">Name</th>
          <th rowspan="2">Age</th>
          <th rowspan="2">Date<br>Inititiated</th>
          <th rowspan="2">Office<br>In<br>January<br>2014</th>
          <th rowspan="2">Grand<br>Office<br>or<br>Page</th>
          <th colspan="6">Ritual Competition Category<br>(Specify One, plus the "Master of the Bow")</th>
          <th colspan="2">Arrival at Grand<br>Assembly</th>
      </tr>
      <tr>
        <th>Master<br>of the<br>Bow</th>
        <th>Supreme</th>
        <th>Grand</th>
        <th>Floor</th>
        <th>Bow</th>
        <th>Begin</th>
        <th>Day</th>
        <th>Time</th>
      </tr></center>

      <?php foreach($entries as $entry) {  ?>
      <tr>
        <?php foreach($cells as $cell) {  ?>
          <td contenteditable="true"><?php echo $entry[strtolower($cell)]; ?></td>
        <?php } ?>
       <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
      </tr>
      <?php } ?>
      <!-- This is our clonable table line -->
      <tr <?php if(count($entries) != 0) echo 'class="hide"' ?>>
          <?php if($assembly == 0) {?>
            <td contenteditable="true">100</td>
          <?php } ?>
          <td contenteditable="true">Editible Example</td>
          <td contenteditable="true">12</td>
          <td contenteditable="true">1-20-2001</td>
          <td contenteditable="true">Hope</td>
          <td contenteditable="true">Grand Charity</td>
          <td contenteditable="true">X</td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true">Religion</td>
          <td contenteditable="true"></td>
          <td contenteditable="true">Tues</td>
          <td contenteditable="true">12:00</td>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
      </tr>
    </table>
  </div>
  <div class="save-button">
    <button id="export-btn" class="btn btn-large btn-primary">Save</button>
  </div>
  <p id="export"></p>

