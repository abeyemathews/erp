<div class="container">
  
  <h2>Employee Languages</h2>
   <form method="POST" action="<?php echo site_url('Employee/addlanguages'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
     <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
    </div>
    <div class="form-group">
      <label for="emp_language">Language:</label>
      <input type="text" class="form-control" id="emp_language" placeholder="Enter Language" name="emp_language">
    </div> 
   <div class="form-group">
      <label for="emp_reading">Reading</label>
      <select class="form-control" id="emp_reading" name="emp_reading">
        <option value="1">Know</option>
        <option value="0">Unknown</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_speaking">Speaking</label>
      <select class="form-control" id="emp_speaking" name="emp_speaking">
        <option value="1">Know</option>
        <option value="0">Unknown</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_writing">Writing</label>
      <select class="form-control" id="emp_writing" name="emp_writing">
        <option value="1">Know</option>
        <option value="0">Unknown</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_understanding">Understanding</label>
      <select class="form-control" id="emp_understanding" name="emp_understanding">
        <option value="1">Know</option>
        <option value="0">Unknown</option>
      </select>
    </div>  
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
