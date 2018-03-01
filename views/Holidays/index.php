<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Holidays</title>
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
    Module Name: Employees Management
  </span>
</nav>
<br>
<div class="container">
  <h2>Employees :: Holidays</h2>
  <form action="Skills_view.php">
    
    <div class="form-group">
      <label for="emp_employee">Employee</label>
      <select class="form-control" id="emp_employee">
        <option>Employee 1</option>
        <option>Employee 2</option>
      </select>
    </div>
    <div class="form-group">
      <label for="emp_skill">Skill:</label>
      <input type="number" class="form-control" id="emp_skill" placeholder="Enter Skill" name="emp_skill">
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
