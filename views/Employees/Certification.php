<div class="container">
  
  <h2>Employee Certification</h2>
  <form method="POST" action="<?php echo site_url('Employee/addcertification'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
     <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
      
    </div>
    <div class="form-group">
      <label for="emp_certification">Certification:</label>
      <input type="text" class="form-control" id="emp_certification" placeholder="Enter Certification" name="emp_certification">
    </div> 
    <div class="form-group">
      <label for="emp_institute">Institute:</label>
      <input type="text" class="form-control" id="emp_institute" placeholder="Enter Institute" name="emp_institute">
    </div>  
    <div class="form-group">
      <label for="emp_granteddate">Granted On:</label>
      <input type="date" class="form-control" id="emp_granteddate" placeholder="Enter Start Date" name="emp_granteddate">
    </div>  
    <div class="form-group">
      <label for="emp_validthrudate">Valid Thru:</label>
      <input type="date" class="form-control" id="emp_validthrudate" placeholder="Enter Valid Thru" name="emp_validthrudate">
    </div>
    <button type="submit" name="" id="Certification_btn" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
