  <div id="table" class="table-editable ritual" >
    <span class="ritual-add glyphicon glyphicon-plus"></span>
    <table class="table table-centered table-bordered table-striped table-hover"><center>
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

          <td ><span contenteditable="true"><?php echo $entry['assembly']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['name']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['initiated']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['office']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['go']; ?></span></td>
          <td>
            <div class="checkbox">
            <label>
              <input type="checkbox" value="" <?php if($entry['master']) echo "checked"; ?> >
            </label>
          </div>
          </td>
          <td>   
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
          <td><span  contenteditable="true"><?php echo $entry['bow']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['day']; ?></span></td>
          <td><span  contenteditable="true"><?php echo $entry['time']; ?></span></td>

       <td>
          <span contenteditable="false" class="table-remove glyphicon glyphicon-remove"></span>
        </td>
      </tr>
      <?php } ?>
      <!-- This is our clonable table line -->
      <tr class="hide">
            <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
          <td>
            <div class="checkbox">
            <label>
              <input type="checkbox" value="">
            </label>
          </div>
          </td>
          <td>
            <select id="type" name="type" requried>
                <option value = "None" selected>None</option>
                <option value = "Supreme" >Supreme</option>
                <option value = "Grand">Grand</option>
                <option value = "Floor">Floor</option>
                <option value = "Bow">Bow</option>
                <option value = "Beginning">Beginning</option>
            </select> 
          </td>
          <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
          <td><span contenteditable="true">Edit</span></td>
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

