<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="container">

  <h2> Add Employee </h2>

  <form method="POST" action="<?php echo site_url('Employee/addemp'); ?>">

<div class="tab-content">
  <div id="home" class="tab-pane  in active">
  
  
  
    <div class="form-group">
      <label for="emp_no">Employee Number:</label>
      <input type="text" class="form-control" id="emp_no" placeholder="Enter Employee Number" name="emp_no" required>
    </div>
    <div class="form-group">
      <label for="emp_fname">First Name:</label>
      <input type="text" class="form-control" id="emp_fname" placeholder="Enter First Name" name="emp_fname" required>
    </div>
    <div class="form-group">
      <label for="emp_mname">Middle Name:</label>
      <input type="text" class="form-control" id="emp_mname" placeholder="Enter Middle Name" name="emp_mname">
    </div>  
    <div class="form-group">
      <label for="emp_lname">Last Name:</label>
      <input type="text" class="form-control" id="emp_lname" placeholder="Enter Middle Name" name="emp_lname" required>
    </div>
    <div class="form-group">
      <label for="emp_nationality">Nationality:</label>
      <input type="text" class="form-control" id="emp_lname" placeholder="Enter Nationality" name="emp_nationality" required>
    </div>
    <div class="form-group">
      <label for="emp_dob">Date of Birth:</label>
      <input type="date" class="form-control" id="emp_dob" placeholder="Enter Nationality" name="emp_dob">
    </div>
    <div class="form-group">
      <label for="emp_gender">Gender:</label>
      <select class="form-control" id="emp_gender" name="emp_gender">
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_maritalstatus">Marital Status:</label>
      <select class="form-control" id="emp_maritalstatus" name="emp_maritalstatus">
        <option value="Divorced">Divorced</option>
        <option value="Married">Married</option>
        <option value="Other">Other</option>
        <option value="Single">Single</option>
        <option value="Widowed">Widowed</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_uid">Aadhar number:</label>
      <input type="number" class="form-control" id="emp_uid" placeholder="Enter Aadhar Number" name="emp_uid">
    </div>
    <div class="form-group">
      <label for="emp_drivinglicense">Driving License No.:</label>
      <input type="text" class="form-control" id="emp_drivinglicense" placeholder="Enter Driving License No." name="emp_drivinglicense">
    </div>


    <div class="form-group">
      <label for="emp_employmentstatus">Employment Status:</label>
      <select class="form-control" id="emp_employmentstatus" name="emp_employmentstatus">
        <option value="Trainee">Trainee</option>
        <option value="Permanent">Permanent</option>
        <option value="Contract">Contract</option>
        <option value="Other">Other</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_jobtitle">Job Title:</label>
      <select class="form-control" id="emp_jobtitle" name="emp_jobtitle">
        <option value="General Manager">General Manager</option>
        <option value="Sales/Marketing manager">Sales/Marketing manager</option>
        <option value="Project Manager">Project Manager</option>
        <option value="Sales Engineer">Sales Engineer</option>
        <option value="Installation Engineer">Installation Engineer</option>
        <option value="Project Engineer">Project Engineer</option>
        <option value="Senior Accountant">Senior Accountant</option>
        <option value="Junior Accountant">Junior Accountant</option>
        <option value="Sales Executive">Sales Executive</option>
        <option value="Site Engineer">Site Engineer</option>
        <option value="Site Supervisor">Site Supervisor</option>
        <option value="Draftsman">Draftsman</option>
        <option value="Technician">Technician</option>
        <option value="Semi Skilled Technician">Semi Skilled Technician</option>
        <option value="Trainees">Trainees</option>
      </select>
    </div>
      
    <div class="form-group">
      <label for="emp_paygrade">Pay Grade:</label>
      <select class="form-control" id="emp_paygrade" name="emp_paygrade">
        <option value="Grade A">Grade A</option>
        <option value="Grade B">Grade B</option>
        <option value="Grade C">Grade C</option>
        <option value="Grade D">Grade D</option>
        <option value="Grade E">Grade E</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_paddress">Permanent Address:</label>
      <textarea class="form-control" rows="5" id="emp_paddress" name="emp_paddress"></textarea>
    </div>
    <div class="form-group">
      <label for="emp_taddress">Temporary Address:</label>
      <textarea class="form-control" rows="5" id="emp_taddress" name="emp_taddress"></textarea>
    </div>
    <div class="form-group">
      <label for="emp_city">City:</label>
      <input type="text" class="form-control" id="emp_city" placeholder="Enter City" name="emp_city">
    </div>
    <div class="form-group">
      <label for="emp_country">Country:</label>
      <input type="text" class="form-control" id="emp_country" placeholder="Enter Country" name="emp_country" required>
    </div> 
    <div class="form-group">
      <label for="emp_state">State:</label>
      <input type="text" class="form-control" id="emp_state" placeholder="Enter State" name="emp_state" required>
    </div>
    <div class="form-group">
      <label for="emp_po">Postal/Zip Code:</label>
      <input type="number" class="form-control" id="emp_po" placeholder="Enter Postal/Zip Code" name="emp_po">
    </div>


    
    <div class="form-group">
      <label for="emp_homeph">Home Phone:</label>
      <input type="text" class="form-control" id="emp_homeph" placeholder="Enter Home Phone" name="emp_homeph">
    </div>
    <div class="form-group">
      <label for="emp_mobile">Mobile Phone:</label>
      <input type="text" class="form-control" id="emp_mobile" placeholder="Enter Mobile Phone" name="emp_mobile" required>
    </div>
    <div class="form-group">
      <label for="emp_workph">Work Phone:</label>
      <input type="text" class="form-control" id="emp_workph" placeholder="Enter Work Phone" name="emp_workph">
    </div>  
    <div class="form-group">
      <label for="emp_workemail">Work Email:</label>
      <input type="email" class="form-control" id="emp_workph" placeholder="Enter Work Email" name="emp_workemail">
    </div> 
    <div class="form-group">
      <label for="emp_privatemail">Private Email:</label>
      <input type="email" class="form-control" id="emp_privatemail" placeholder="Enter Private Email" name="emp_privatemail">
    </div>
    <div class="form-group">
      <label for="emp_joineddate">Joined Date:</label>
      <input type="date" class="form-control" id="emp_joineddate" placeholder="Enter Joined Date" name="emp_joineddate">
    </div>
    <div class="form-group">
      <label for="emp_confirmationdate">Confirmation Date:</label>
      <input type="date" class="form-control" id="emp_confirmationdate" placeholder="Enter Confirmation Date" name="emp_confirmationdate">
    </div>
    <div class="form-group">
      <label for="emp_terminationdate">Termination Date:</label>
      <input type="date" class="form-control" id="emp_terminationdate" placeholder="Enter Termination Date" name="emp_terminationdate">
    </div>
    <div class="form-group">
      <label for="emp_department">Department:</label>
      
      
     <div id="emp_departmentd">
     </div>
    </div> 
    <div class="form-group">
      <label for="emp_supervisor">Supervisor:</label>
      
         
      
     <div id="emp_supervisord">
     </div>
       
     <?php
 
require_once(APPPATH."views/Employees/empldd.php");
?>
 
    </div>
    <div class="form-group">
      <label for="emp_notes">Notes:</label>
      <textarea class="form-control" rows="5" id="emp_notes" name="emp_notes"></textarea>
    </div>
    
    <button type="submit" name="" id="emp_btn" class="btn btn-primary">Submit</button>
  </div>

 
      
    
  </form>
</div>

</body>
</html>


  