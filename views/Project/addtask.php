
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees :: Skills</title>
  <?php $thisPage="Task"; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
    
<?php include '../Employees/menu_emp.php';?>
<br>
<div class="container">
   <?php include '../Employees/clock.php';?>
    <span></span>
  <h2> <?php echo $thisPage; ?></h2>
  <form method="POST"action="addtask.php">
    
   
    <div class="form-group">
      <label for="pro_tasktitle">Title:</label>
      <input type="text" class="form-control" id="pro_tasktitle" placeholder="Enter Task Title" name="pro_tasktitle">
    </div> 
    <div class="form-group">
    <label for="pro_taskstatus">Status</label>
    <select class="form-control" id="pro_taskstatus">
        <option>Due</option>
        <option>Done</option>
        <option>Progress</option>
      </select> 
    </div>
      
    <div class="form-group">
    <label for="pro_taskpriority">Priority</label>
    <select class="form-control" id="pro_taskpriority">
        <option>Low</option>
        <option>High</option>
        <option>Medium</option>
        <option>Urgent</option>
      </select> 
    </div>
      
    <div class="form-group">
      <label for="pro_taskstartdate">Start Date:</label>
      <input type="text" class="form-control" id="pro_taskstartdate" placeholder="Enter Task Title" name="pro_taskstartdate">
    </div> 
    <div class="form-group">
      <label for="pro_taskduedate">Due Date:</label>
      <input type="text" class="form-control" id="pro_taskduedate" placeholder="Enter Task Title" name="pro_taskduedate">
    </div>
      
     <div class="form-group">
      <label for="emp_employee">Assign to</label>

      <select class="form-control" id="emp_employee">
        <option>Employee 1</option>
        <option>Employee 2</option>
      </select>
      
    </div>
    <div class="form-group">
      <label for="pro_taskdetails">Description:</label>
      <textarea class="form-control" rows="5" id="pro_taskdetails" name="pro_taskdetails"></textarea>
    </div>  

    
    <button type="submit" name="task_btn" id="task_btn" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
