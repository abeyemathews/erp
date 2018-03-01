<div class="container">

  <h2> Employee Skills</h2>
  <form method="POST"action="<?php echo site_url('Employee/addskills'); ?>">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
     
      
      <div id="emp_employeed">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
      
    </div>
    <div class="form-group">
      <label for="emp_skill">Skill:</label>
      <input type="text" class="form-control" id="emp_skill" placeholder="Enter Skill" name="emp_skill">
    </div> 
    <div class="form-group">
      <label for="emp_skilldetails">Details:</label>
      <textarea class="form-control" rows="5" id="emp_skilldetails" name="emp_skilldetails"></textarea>
    </div>  

    
    <button type="submit" name="" id="Skills_btn" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
