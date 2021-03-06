<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Attendance</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"/>
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
  <script src="js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
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
  <h2>Employees :: Attendance</h2>
  <form action="index.php" method="POST">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <select class="form-control" id="emp_employee">
        <option>Employee 1</option>
        <option>Employee 2</option>
      </select>
   
    </div>
      
        
     
               
    <div class="form-group input-append date form_datetime">
      <label for="emp_timein">Time-In:</label>
      <input type="text" class="form-control" id="emp_timein"  name="emp_timein" value="" readonly>
       <span class="add-on"><i class="icon-th"></i></span>
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "yyyy-mm-dd hh:ii:ss"
            
        });
    </script>
    
    </div>
     
       <div class="form-group input-append date form_datetime">
      <label for="emp_timeout">Time-Out:</label>
      <input type="text" class="form-control" id="emp_timeout"  name="emp_timeout" value="" readonly>
       <span class="add-on"><i class="icon-th"></i></span>
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
             format: "yyyy-mm-dd hh:ii:ss"
        });
    </script>
    
    </div>
    <div class="form-group">
      <label for="emp_note">Details:</label>
      <textarea class="form-control" rows="5" id="emp_note" name="emp_note"></textarea>
    </div>  
 
     

    
    <button type="submit" class="btn btn-primary" name="Attendance_btn" id="Attendance_btn">Submit</button>
  </form>
</div>

</body>
</html>
