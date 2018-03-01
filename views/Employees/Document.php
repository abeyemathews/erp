<div class="container">
  
  <h2>Employee Document</h2>
  <form enctype="multipart/form-data" method="POST" action="Document.php">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
    </div>
    <div class="form-group">
      <label for="emp_document">Document:</label>
      <input type="text" class="form-control" id="emp_document" placeholder="Enter Document" name="emp_document">
    </div> 
    <div class="form-group">
      <label for="emp_ddateadded">Date Added:</label>
      <input type="date" class="form-control" id="emp_ddateadded" placeholder="Enter Date Added" name="emp_ddateadded">
    </div>   
    <div class="form-group">
      <label for="emp_dvaliduntil">Valid Until:</label>
      <input type="date" class="form-control" id="emp_document" placeholder="Enter Valid Until" name="emp_dvaliduntil">
    </div>   
    <div class="form-group">
      <label for="emp_dstatus">Status</label>
      <select class="form-control" id="emp_dstatus" name="emp_dstatus">
        <option>Active</option>
        <option>Inactive</option>
        <option>Draft</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_dDetails">Details:</label>
      <textarea class="form-control" rows="5" id="emp_dDetails" name="emp_dDetails"></textarea>
    </div>  
    <div class="form-group">
    <label for="emp_dattachment">Attachment</label>
    <input type="file" class="form-control-file" id="uploaded_file" name="uploaded_file" value="1" aria-describedby="Attachment">
    </div>
      
      <button type="submit" class="btn btn-primary" value="Upload" name="Upload">Submit</button>

  </form>
  
 
</div>

</body>
</html>
