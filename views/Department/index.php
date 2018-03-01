
<br>
<div class="container">
  <h2>Employees :: Department</h2>
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
