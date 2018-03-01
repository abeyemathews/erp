<div class="container">
  
  <h2>Employee Dependents</h2>
  <form method="POST" action="<?php echo site_url('Employee/adddependents'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
       
    </div>
    <div class="form-group">
      <label for="emp_dname">Name:</label>
      <input type="text" class="form-control" id="emp_dname" placeholder="Enter Name" name="emp_dname">
    </div> 
     <div class="form-group">
      <label for="emp_drelationship">Relationship</label>
      <select class="form-control" id="emp_drelationship">
        <option>Child</option>
        <option>Other</option>
        <option>Parent</option>
        <option>Spouse</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="emp_skilldetails">Details:</label>
      <textarea class="form-control" rows="5" id="emp_skilldetails"></textarea>
    </div>
    <div class="form-group">
      <label for="emp_ddob">Date of Birth:</label>
      <input type="date" class="form-control" id="emp_ddob" placeholder="Enter Date of Birth" name="emp_ddob">
    </div>
    <div class="form-group">
      <label for="emp_duid">Aadhar number:</label>
      <input type="number" class="form-control" id="emp_duid" placeholder="Enter Date of Birth" name="emp_duid">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
