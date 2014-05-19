  <div id="table" class="table-editable ritual">
    <span class="ritual-add glyphicon glyphicon-plus"></span>
    <table class="table table-centered table-bordered table-hover"><center>
      <tr>
          <th rowspan="2">A</th>
          <th rowspan="2">Name</th>
          <th rowspan="2">Date<br>Inititiated</th>
          <th rowspan="2">Office<br>In<br>January<br>2014</th>
          <th rowspan="2">Grand<br>Office<br>or<br>Page</th>
          <th colspan="3">Specify One Category<br> Plus the "Master of the Bow"</th>
          <th colspan="2">Arrival at Grand<br>Assembly</th>
      </tr>
      <tr>
        <th>Bow <br>Master</th>
        <th>Category</th>
        <th>Specify <br> for Bow</th>
         <th>Day</th>
        <th>Time</th>
      </tr></center>

      <?php foreach($entries as $entry) { ?>
        <tr>

          <td contenteditable="true"><?php echo $entry['assembly']; ?></td>
          <td contenteditable="true"><?php echo $entry['name']; ?></td>
          <td contenteditable="true"><?php echo $entry['initiated']; ?></td>
          <td contenteditable="true"><?php echo $entry['office']; ?></td>
          <td contenteditable="true"><?php echo $entry['go']; ?></td>
          <td contenteditable="true">
            <div class="checkbox">
            <label>
              <input type="checkbox" value="" <?php if($entry['master']) echo "checked"; ?> >
            </label>
          </div>
          </td>
          <td contenteditable="true">   
            <select id="type" name="type" requried>
                <option  value = "None" 
                    <?php if($entry['category'] == "None") echo "None"; ?> >None</option>
                <option  value = "Supreme" 
                    <?php if($entry['category'] == "Supreme") echo "selected"; ?> >Supreme</option>
                <option  value = "Grand" 
                    <?php if($entry['category'] == "Grand") echo "selected"; ?> >Grand</option>
                <option  value = "Floor" 
                    <?php if($entry['category'] == "Floor") echo "selected"; ?> >Floor</option>
                <option  value = "Bow" 
                    <?php if($entry['category'] == "Bow") echo "selected"; ?> >Bow</option>
                <option  value = "Beginning" 
                    <?php if($entry['category'] == "Beginning") echo "selected"; ?> >Beginning</option>
            </select> 
          </td>
          <td contenteditable="true"><?php echo $entry['bow']; ?></td>
          <td contenteditable="true"><?php echo $entry['day']; ?></td>
          <td contenteditable="true"><?php echo $entry['time']; ?></td>

       <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
      </tr>
      <?php } ?>
      <!-- This is our clonable table line -->
      <tr class="hide">
            <td contenteditable="true">100</td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true">
            <div class="checkbox">
            <label>
              <input type="checkbox" value="">
            </label>
          </div>
          </td>
          <td contenteditable="true">   
            <select id="type" name="type" requried>
                <option value = "None" selected>None</option>
                <option value = "Supreme" >Supreme</option>
                <option value = "Grand">Grand</option>
                <option value = "Floor">Floor</option>
                <option value = "Bow">Bow</option>
                <option value = "Beginning">Beginning</option>
            </select> 
          </td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
          <td contenteditable="true"></td>
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

