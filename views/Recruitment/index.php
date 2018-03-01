<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Skills</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">
  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
        <a class="nav-link" href="index.php">Company</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../Department/index.php">Department</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../Employees/index.php">Employees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../Attendance/index.php">Attendance</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../LeaveManagement/index.php">Leave Applications</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../Holidays/index.php">Holidays</a>
    </li>
    </li>
    
    
    
  </ul>
  <!-- Navbar text-->
  <span class="navbar-text">
    Module Name: Company Management
  </span>
</nav>
<br>
<div class="container">
  <h2>Employees :: Skills</h2>
  <form action="index.php">
    
    
    <div class="form-group">
      <label for="candidate_fname">First Name:</label>
      <input type="text" class="form-control" id="candidate_fname" placeholder="Enter First Name" name="candidate_fname">
    </div> 
    <div class="form-group">
      <label for="candidate_fname">Last Name:</label>
      <input type="text" class="form-control" id="candidate_lname" placeholder="Enter Last Name" name="candidate_lname">
    </div>   
    <div class="form-group">
      <label for="candidate_fname">Last Name:</label>
      <input type="text" class="form-control" id="candidate_lname" placeholder="Enter Last Name" name="candidate_lname">
    </div>     
    <div class="form-group">
      <label for="candidate_gender">Gender</label>
      <select class="form-control" id="emp_employee">
        <option>Female</option>
        <option>Male</option>
      </select>
    </div>  
    <div class="form-group">
      <label for="emp_skilldetails">Details:</label>
      <textarea class="form-control" rows="5" id="emp_skilldetails"></textarea>
    </div>  

    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
