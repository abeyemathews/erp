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
  <h2>Employees :: Skills</h2>
  <p></p>  
  <?php
   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM company';

   mysql_select_db('bevat');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
     ?>
   
   
  <table class="table table-striped">
      
    <thead>
      <tr>
         
        <th>Employee</th>
        <th>Skill</th>
        <th>Details</th>
        <th></th>
        
      </tr>
    </thead>
    
    <tbody>
        <?php
        while($row = mysql_fetch_array($retval, MYSQL_NUM)) {
         
        
      ?>
      <tr>
        <?php echo "<td>"; echo $row[0]; echo "</td>"; ?>
         <?php echo "<td>"; echo $row[1]; echo "</td>"; ?>
           <?php echo "<td>"; echo $row[2]; echo "</td>"; ?>
           <?php echo "<td>"; echo $row[3]; echo "</td>"; ?>
      </tr>
      
    </tbody>
  </table>
</div>
</body>
<?php 
}
mysql_free_result($retval);
 
   mysql_close($conn);

     
   ?>
</html>

 