
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Skills</title>
  <?php $thisPage="Skills"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
    
<?php include './menu_emp.php';?>
<br>
<div class="container">
   <?php include './clock.php';?>
    <span></span>
  <h2> <?php echo $thisPage; ?></h2>
  <form method="POST"action="Skills.php">
    
    <div class="form-group">
      <label for="emp_employee">Travel Type*</label>
     <select class="form-control" id="emp_employee">
        <option>Employee 1</option>
        <option>Employee 2</option>
      </select>  
      
    </div>
    <div class="form-group">
      <label for="emp_skill">Skill:</label>
      <input type="text" class="form-control" id="emp_skill" placeholder="Enter Skill" name="emp_skill">
    </div> 
    <div class="form-group">
      <label for="emp_skilldetails">Details:</label>
      <textarea class="form-control" rows="5" id="emp_skilldetails" name="emp_skilldetails"></textarea>
    </div>  

    
    <button type="submit" name="Skills_btn" id="Skills_btn" class="btn btn-primary">Submit</button>
  </form>
</div>
<ul class="nav-dropdown nav-submenu" style="display: none; right: auto;">
         
<li class=""><a href="/province/trivandrum/1">TRIVANDRUM<span class="submenu-indicator"><span class="submenu-indicator-chevron"></span></span></a>
<ul class="nav-dropdown nav-submenu" style="display: none;">
<li class=""><a href="/eparchies/major-archieparchy-of-trivandrum/1">MAJOR ARCHIEPARCHY OF TRIVANDRUM</a></li><li><a href="/eparchies/eparchy-of-marthandam/2">EPARCHY OF MARTHANDAM</a></li><li><a href="/eparchies/eparchy-of-mavelikara/3">EPARCHY Of MAVELIKARA</a></li><li><a href="/eparchies/eparchy-of-pathanamthitta/4">EPARCHY OF PATHANAMTHITTA </a></li><li><a href="/eparchies/epachy-of-parassala/19">EPACHY OF PARASSALA</a></li></ul></li>
 
<li class=""><a href="/province/tiruvalla/2">TIRUVALLA<span class="submenu-indicator"><span class="submenu-indicator-chevron"></span></span></a>
<ul class="nav-dropdown nav-submenu" style="display: none;">
<li><a href="/eparchies/archieparchy-of-tiruvalla/5">ARCHIEPARCHY OF TIRUVALLA</a></li><li><a href="/eparchies/eparchy-of-muvattupuzha/6">EPARCHY OF MUVATTUPUZHA</a></li><li><a href="/eparchies/eparchy-of-bathery/7">EPARCHY OF BATHERY</a></li><li><a href="/eparchies/eparchy-of-puttur/8">EPARCHY OF PUTTUR</a></li></ul></li>
 
<li class=""><a href="/province/etr/4">ETR<span class="submenu-indicator"><span class="submenu-indicator-chevron"></span></span></a>
<ul class="nav-dropdown nav-submenu" style="display: none;">
<li><a href="/eparchies/eparchy-of-st-mary-queen-of-peace-usa-and-canada/20">EPARCHY OF ST MARY QUEEN OF PEACE, USA  AND CANADA</a></li><li><a href="/eparchies/eparchy-of-st-john-chrysostom-gurgaon/21">EPARCHY OF ST. JOHN CHRYSOSTOM, GURGAON</a></li><li><a href="/eparchies/exarchate-of-st-ephrem-khadki/22">EXARCHATE OF ST EPHREM, KHADKI</a></li></ul></li>
 
<li class=""><a href="/province/other-pastoral-regions/11">OTHER PASTORAL REGIONS<span class="submenu-indicator"><span class="submenu-indicator-chevron"></span></span></a>
<ul class="nav-dropdown nav-submenu" style="display: none;">
<li><a href="/eparchies/region-in-italy/9">Region In Italy</a></li><li><a href="/eparchies/region-in-germany-switzerland/10">Region In Germany &amp; Switzerland </a></li><li><a href="/eparchies/region-in-united-kingdom-ireland/11">Region In United Kingdom &amp; Ireland</a></li><li><a href="/eparchies/extra-territorial-region-in-middle-east/13">Extra Territorial Region In Middle East</a></li><li><a href="/eparchies/australiasingapore/15">AustraliaSingapore</a></li></ul></li>
</ul>
</body>
</html>
