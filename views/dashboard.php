<!DOCTYPE html>
<html lang = "en">
	<head>
		
<title>Notification</title>
		
		
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="http://absmedicalengineering.com/erp/base/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="http://absmedicalengineering.com/erp/base/icon/css/ionicons.min.css">
<link rel="stylesheet" href="http://absmedicalengineering.com/erp/base/font/on-server/css/fontawesome-all.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
	
	<style>
	
	.card-columns {
  @include media-breakpoint-only(lg) {
    column-count: 4;
  }
  @include media-breakpoint-only(xl) {
    column-count: 5;
  }
}

  #alert_popover
  {
   display:block;
   position:absolute;
   bottom:50px;
   left:50px;
  }
  .wrapper {
    display: table-cell;
    vertical-align: bottom;
    height: auto;
    width:200px;
  }
  .alert_default
  {
   color: #333333;
   background-color: #f2f2f2;
   border-color: #cccccc;
  }
  </style>
	</head>
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #e3f2fd;">.
<a class="navbar-brand" href="#"><img src="http://absmedicalengineering.com/abscompany.png" alt="Smiley face" height="42" width="42"></a>
  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
        <a class="nav-link" href="#">Company</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Department</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Employees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Attendance</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Leave Applications</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Holidays</a>
    </li>
    </li>
    
    
    
  </ul>
  <!-- Navbar text-->
  <span class="navbar-text">
    
  
  </span>
</nav>




<nav class="navbar navbar-expand-sm">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><img src="http://absmedicalengineering.com/abs.png" alt="Smiley face" height="42" width="42"></a>
  <!-- Links -->
  <ul class="navbar-nav">
    

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
        Employees
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="index">Add</a>
        <a class="dropdown-item" href="index_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="skills_view" id="navbardrop2" data-toggle="dropdown">
        Skills
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="skills">Add</a>
        <a class="dropdown-item" href="skills_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop3" data-toggle="dropdown">
        Education
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="education">Add</a>
        <a class="dropdown-item" href="education_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop4" data-toggle="dropdown">
       Certifications
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="certification">Add</a>
        <a class="dropdown-item" href="certification_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop5" data-toggle="dropdown">
        Languages
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="languages">Add</a>
        <a class="dropdown-item" href="languages_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop6" data-toggle="dropdown">
       Dependents
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="dependents">Add</a>
        <a class="dropdown-item" href="dependents_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop6" data-toggle="dropdown">
       Emergency Contacts
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="emergencycontact">Add</a>
        <a class="dropdown-item" href="emergencycontact_view">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop6" data-toggle="dropdown">
       Documents
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="education_view">Add</a>
        <a class="dropdown-item" href="education">View</a>
        <a class="dropdown-item" href="#">Edit</a>
      </div>
    </li>
  </ul>
</nav>

<div class="row">
        
        
        <div class="col-lg-3 col-xs-12">

    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>
                People
            </h3>
            <p id="numberOfEmployees" class="content1">
               
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-person-stalker"></i>
        </div>
        <a href="http://absmedicalengineering.com/erp/index.php/employee/index_view" class="small-box-footer" id="employeeLink">
            Manage Employees <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-green">
        <div class="inner">
            <h3>Company</h3>
            <p id="numberOfCompanyStuctures">
                3 Departments
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-shuffle"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=company_structure&amp;m=admin_Company_Structure" class="small-box-footer" id="companyLink">
            Manage Company <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>Users</h3>
            <p id="numberOfUsers">
                2 Users
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-person-add"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=users&amp;m=admin_Users" class="small-box-footer" id="usersLink">
            Manage Users <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-red">
        <div class="inner">
            <h3>Projects</h3>
            <p id="numberOfProjects">
                4 Active Projects
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=projects&amp;m=admin_Projects/Client_Setup" class="small-box-footer" id="projectsLink">
            Update Clients/Projects <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">
    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>
                Attendance
            </h3>
            <p id="numberOfAttendanceLastWeek">
                0 Entries Last Week
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-clock"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=attendance&amp;m=admin_Monitor_Attendance" class="small-box-footer" id="attendanceLink">
            Monitor Attendance <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-red">
        <div class="inner">
            <h3>Leave</h3>
            <p id="numberOfLeaves">0 Upcoming</p>
        </div>
        <div class="icon">
            <i class="ion ion-calendar"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=leaves&amp;m=admin_Leave_Settings" class="small-box-footer" id="leaveLink">
            Leave Management <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-teal">
        <div class="inner">
            <h3>Reports</h3>
            <p>
                View / Download Reports
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-document-text"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=reports&amp;m=admin_Reports" class="small-box-footer" id="reportsLink">
            Generate a Report <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-green">
        <div class="inner">
            <h3>Settings</h3>
            <p>
                Configure IceHrm
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-settings"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=settings&amp;m=admin_Settings" class="small-box-footer" id="settingsLink">
            Update Settings <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-red">
        <div class="inner">
            <h3>
                Applicants
            </h3>
            <p>
                0 Candidates
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-person-stalker"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=candidates&amp;m=admin_Candidates" class="small-box-footer" id="candidatesLink">
            Manage Candidates <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>
                Active Jobs
            </h3>
            <p id="numberOfJobs">
                0 Jobs Posted
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-clipboard"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=jobsetup&amp;m=admin_Recruitment_Setup" class="small-box-footer" id="jobsLink">
            Manage Jobs <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-yellow">
        <div class="inner">
            <h3>
                Training
            </h3>
            <p id="numberOfCourses">
                2 Courses
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-nuclear"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=training&amp;m=admin_Training_Setup" class="small-box-footer" id="trainingLink">
            Manage Training <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-red">
        <div class="inner">
            <h3>
                Travel
            </h3>
            <p id="numberOfTravel">
                Requests
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-plane"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=travel&amp;m=admin_Travel_Administration" class="small-box-footer" id="travelLink">
            Manage Travel <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-green">
        <div class="inner">
            <h3>
                Document
            </h3>
            <p id="numberOfDocuments">
                Management
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-document"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=documents&amp;m=admin_Document_Management" class="small-box-footer" id="documentLink">
            Manage Documents <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-teal">
        <div class="inner">
            <h3>
                Expense
            </h3>
            <p>
                Management
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-card"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=expenses&amp;m=admin_Expense_Administration" class="small-box-footer" id="expenseLink">
            Manage Expenses <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-aqua">
        <div class="inner">
            <h3>
                Permission
            </h3>
            <p>
                Management
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-locked"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=permissions&amp;m=admin_Manage_Permissions" class="small-box-footer" id="permissionLink">
            Manage Permissions <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-green">
        <div class="inner">
            <h3>
                Upgrade
            </h3>
            <p>
                and Invoices
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-battery-charging"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=billing&amp;m=admin_Upgrade" class="small-box-footer" id="upgradeLink">
            Make a Payment <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div><div class="col-lg-3 col-xs-12">

    <div class="small-box bg-teal">
        <div class="inner">
            <h3>
                HR Form
            </h3>
            <p>
                Management
            </p>
        </div>
        <div class="icon">
            <i class="ion ion-folder"></i>
        </div>
        <a href="https://icehrm.com/app/bevat/?g=admin&amp;n=forms&amp;m=admin_HR_Form_Management" class="small-box-footer" id="formLink">
            Manage Forms <i class="fa fa-arrow-circle-right"></i>
        </a>
    </div>
</div>    </div>
</body>
<script>
$(document).ready(function(){

	setInterval(function(){
	load_last_notification();
	}, 5000);

	function load_last_notification(){
		$.ajax({
		url:"http://absmedicalengineering.com/erp/index.php/dashboard/alert",
		method:"POST",
		success:function(data){
		$('.content1').html(data);
		}
	})
	}

	
});
</script>
</html>