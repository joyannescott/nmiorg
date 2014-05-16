
  <div id="table" class="table-editable">
    <span class="table-add glyphicon glyphicon-plus"></span>
    <table class="table">
      <tr>
       <?php foreach($headers as $header) {  ?>
          <th><?php echo $header ?></th>
       <?php } ?>
        <th></th>
        <th></th>
      </tr>

      <?php foreach($entries as $entry) {  ?>
      <tr>
        <?php foreach($headers as $header) {  ?>
          <td contenteditable="true"><?php echo $entry[strtolower($header)]; ?></td>
        <?php } ?>
       <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
      <?php } ?>
      <!-- This is our clonable table line -->
      <tr <?php if(count($entries) != 0) echo 'class="hide"' ?>>
       <?php for($i = 0; $i < count($headers); $i++) {  ?>        
          <td contenteditable="true">Edit</td>
       <?php } ?>
        <td>
          <span class="table-remove glyphicon glyphicon-remove"></span>
        </td>
        <td>
          <span class="table-up glyphicon glyphicon-arrow-up"></span>
          <span class="table-down glyphicon glyphicon-arrow-down"></span>
        </td>
      </tr>
    </table>
  </div>
  <div class="save-button">
    <button id="export-btn" class="btn btn-large btn-primary">Save</button>
  </div>
  <p id="export"></p>

