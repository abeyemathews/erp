<div class="container">

  <h2>Employee Education</h2>
  <form method="POST" action="<?php echo site_url('Employee/addeducation'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
     
    </div>
    <div class="form-group">
      <label for="emp_qualification">Qualification:</label>
      <input type="text" class="form-control" id="emp_qualification" placeholder="Enter Qualification" name="emp_qualification">
    </div> 
    <div class="form-group">
      <label for="emp_institute">Institute:</label>
      <input type="text" class="form-control" id="emp_institute" placeholder="Enter Institute" name="emp_institute">
    </div>  
    <div class="form-group">
      <label for="emp_sdate">Start Date:</label>
      <input type="date" class="form-control" id="emp_sdate" placeholder="Enter Start Date" name="emp_sdate">
    </div>  
    <div class="form-group">
      <label for="emp_cdate">Start Date:</label>
      <input type="date" class="form-control" id="emp_cdate" placeholder="Enter Completed On" name="emp_cdate">
    </div>
    <button type="submit" name="" id="Education_btn" class="btn btn-primary">Submit</button>
  </form>
  
  
</div>

</body>
</html>
