<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Leave Management</title>
  <?php $thisPage="LeaveManagement"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Employees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Skills.php">Skills</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Education.php">Education</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Certification.php">Certifications</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Languages.php">Languages</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Dependents.php">Dependents</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="EmergencyContact.php">Emergency Contacts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Document.php">Documents</a>
    </li>
  </ul>
  <!-- Navbar text-->
  <span class="navbar-text">
    Module Name: Leave Management
  </span>
</nav>
<br>
<div class="container">
  <h2>Employees :: Apply Leave</h2>
  <form action="index.php">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <select class="form-control" id="emp_employee">
        <option>Employee 1</option>
        <option>Employee 2</option>
      </select>
      
     
    </div>
    <div class="form-group">
      <label for="emp_leavefromdt">Leave From Date:</label>
      <input type="date" class="form-control" id="emp_leavefromdt" placeholder="Enter Leave From Date" name="emp_leavefromdt">
    </div> 
    <div class="form-group">
      <label for="emp_leavetodt">Leave To Date:</label>
      <input type="date" class="form-control" id="emp_leavetodt" placeholder="Enter Leave To Date" name="emp_leavetodt">
    </div> 
      
    
    <div class="form-group">
      <label for="emp_leavesession">Full day or half day</label>
      <select class="form-control" id="emp_leavesession" name="emp_leavesession">
        <option>Morning</option>
        <option>Afternoon</option>
        <option>Full Day</option>
      </select>
    </div>
    
     <div class="form-group">
      <label for="emp_leavedays">Total Leave Required:</label>
      <input type="number" class="form-control" id="emp_leavedays" placeholder="Enter How Many Day/Days Leave Required" name="emp_leavedays">
    </div>
    <div class="form-group">
      <label for="emp_leavetype">Type Of Leave.</label>
      <select class="form-control" id="emp_leavetype" name="emp_leavetype">
        <option>Sick Leave (Illness or Injury)</option>
        <option>Personal Leave</option>
        <option>Emergency Leave</option>
        <option>Leave without pay</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="emp_leavereasson">Reason for Leave:</label>
      <textarea class="form-control" rows="5" id="emp_leavereasson" name="emp_leavereasson"></textarea>
    </div>  

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
