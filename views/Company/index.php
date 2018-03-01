<!DOCTYPE html>
<html lang="en">
<head>
  <title>Company Management</title>
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
  <h2>Company</h2>
  <form method="POST" action="index.php">
    
    <div class="form-group">

    <div class="form-group">
      <label for="name_company">Name:</label>
      <input type="text" class="form-control" id="name_company" placeholder="Enter Name of the company" name="name_company">
    </div> 
    <div class="form-group">
      <label for="gst_company">GST:</label>
      <input type="text" class="form-control" id="gst_company" placeholder="Enter GST of company" name="gst_company">
    </div>
    <div class="form-group">
      <label for="add_company">Address:</label>
      <textarea class="form-control" name="add_company" rows="5" id="add_company"></textarea>
    </div>
    <div class="form-group">
      <label for="city_company">City:</label>
      <input type="text" class="form-control" id="city_company" placeholder="Enter City" name="city_company">
    </div>
    <div class="form-group">
      <label for="district_company">District:</label>
      <input type="text" class="form-control" id="district_company" placeholder="Enter District" name="district_company">
    </div>
    <div class="form-group">
      <label for="state_company">State:</label>
      <input type="text" class="form-control" id="state_company" placeholder="Enter State" name="state_company">
    </div>
    <div class="form-group">
      <label for="isocode_country">ISO country code:</label>
      <input type="text" class="form-control" id="isocode_country" placeholder="Enter ISO country code" name="isocode_country">
    </div>
    <div class="form-group">
      <label for="po_company">PIN code:</label>
      <input type="text" class="form-control" id="po_company" placeholder="Enter Pin code" name="po_company">
    </div>
    <div class="form-group">
      <label for="email_company">E-mail ID:</label>
      <input type="email" class="form-control" id="email_company" placeholder="Enter E-mail ID" name="email_company">
    </div>  
   <div class="form-group">
      <label for="website_company">Website:</label>
      <input type="text" class="form-control" id="website_company" placeholder="Enter Website" name="website_company">
    </div>  
   <div class="form-group">
      <label for="phone_company">Phone Number:</label>
      <input type="text" class="form-control" id="phone_company" placeholder="Enter Phone Number" name="phone_company">
    </div>
     <div class="form-group">
      <label for="fax_company">FAX Number:</label>
      <input type="text" class="form-control" id="fax_company" placeholder="Enter FAX Number" name="fax_company">
    </div>
    <div class="form-group">
      <label for="mobile_company">Mobile Number:</label>
      <input type="text" class="form-control" id="mobile_company" placeholder="Enter Mobile Number" name="mobile_company">
    </div>
    <button type="submit" name = "company_btn" id="company_btn" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
