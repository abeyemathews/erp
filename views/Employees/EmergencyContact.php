<div class="container">

  <h2>Employee Emergency Contacts</h2>
  <form method="POST" action="<?php echo site_url('Employee/addemergencycontact'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
     <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
    </div>
    <div class="form-group">
      <label for="emp_ecname">Name:</label>
      <input type="text" class="form-control" id="emp_ecname" placeholder="Enter Name" name="emp_ecname">
    </div> 
    <div class="form-group">
      <label for="emp_ecrelationship">Relationship:</label>
      <input type="text" class="form-control" id="emp_ecrelationship" placeholder="Enter Relationship" name="emp_ecrelationship">
    </div>   
    <div class="form-group">
      <label for="emp_echomephone">Home Phone:</label>
      <input type="text" class="form-control" id="emp_echomephone" placeholder="Enter Home Phone" name="emp_echomephone">
    </div> 
    <div class="form-group">
      <label for="emp_ecworkphone">Work Phone:</label>
      <input type="text" class="form-control" id="emp_ecworkphone" placeholder="Enter Work Phone" name="emp_ecworkphone">
    </div> 
    <div class="form-group">
      <label for="emp_ecmobilephone">Mobile Phone:</label>
      <input type="text" class="form-control" id="emp_ecmobilephone" placeholder="Enter Mobile Phone" name="emp_ecmobilephone">
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
