<div id="employee">

</div>


<script>
function Employee(data) {
    this.emp= data.info;
    this.thead='';
    this.tbody= '';
    this.tfoot= '';
    this.empid= 0;
    this.filtered=[];
    
}
Employee.prototype.buildthead= function() {
    var empdata=this.emp;
    var head='';
    $.each(empdata[0],function( index, value ) {
  
  head=head+'<th>'+index+'</th>';
 
});
this.thead='<thead>'+'<tr>'+head+'</tr>'+'</thead>';

};


Employee.prototype.buildtbody= function() {
    var empdata=this.emp;
    var body='';
    $.each(empdata,function( index, value ) {
  
 // body=body+'<tr>'+'<td>'+value.emp_id+'</td>'+'</tr>';
  body=body+'<tr>'+'<td>'+value.emp_id+'</td>'+'<td>'+value.emp_no+'</td>'+'<td>'+value.emp_fname+'</td>'+'<td>'+value.emp_mname+'</td>'+'<td>'+value.emp_lname+'</td>'+'<td>'+value.emp_nationality+'</td>'+'<td>'+value.emp_dob+'</td>'+'<td>'+value.emp_gender+'</td>'+'<td>'+value.emp_maritalstatus+'</td>'+'<td>'+value.emp_uid+'</td>'+'<td>'+value.emp_drivinglicense+'</td>'+'<td>'+value.emp_employmentstatus+'</td>'+'<td>'+value.emp_jobtitle+'</td>'+'<td>'+value.emp_paygrade+'</td>'+'<td>'+value.emp_paddress+'</td>'+'<td>'+value.emp_taddres+'</td>'+'<td>'+value.emp_city+'</td>'+'<td>'+value.emp_country+'</td>'+'<td>'+value.emp_state+'</td>'+'<td>'+value.emp_po+'</td>'+'<td>'+value.emp_homeph+'</td>'+'<td>'+value.emp_mobile+'</td>'+'<td>'+value.emp_workph+'</td>'+'<td>'+value.emp_workemail+'</td>'+'<td>'+value.emp_privatemail+'</td>'+'<td>'+value.emp_joineddate+'</td>'+'<td>'+value.emp_confirmationdate+'</td>'+'<td>'+value.emp_terminationdate+'</td>'+'<td>'+value.emp_department+'</td>'+'<td>'+value.emp_supervisor+'</td>'+'<td>'+value.emp_notes+'</td>'+'<td>'+value.emp_status+'</td>'+'<td>'+value.managerid+'</td>'+'</tr>';
 
});
this.tbody='<tbody>'+'<tr>'+body+'</tr>'+'</tbody>';

};


</script>


<script>
function renderview(){
$.post("http://absmedicalengineering.com/erp/index.php/department/empjson",
    {
        
    },
    function(data,status){
       
       var empinfo={info:data}; 
       
      alert(JSON.stringify(empinfo));
      newview =new Employee(empinfo);
      //newview.buildthead();
      newview.buildtbody();
      alert(newview.thead);
      newview.thead='<thead class="thead-light"><tr><th>Employee ID</th><th>Employee No.</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Nationality</th><th>Date Of Birth</th><th>Gender</th><th>Marital Status</th><th>Aadhar ID</th><th>Driving License</th><th>Employment Status</th><th>Job Title</th><th>Paygrade</th><th>Permanent Address</th><th>Current Address</th><th>City</th><th>Country</th><th>State</th><th>PIN</th><th>Home Phone</th><th>Personal Mobile No.</th><th>Official Mobile No.</th><th>Official Email</th><th>Personal Email</th><th>Joined Date</th><th>Confirmation Date</th><th>Termination Date</th><th>Department</th><th>Supervisor</th><th>Notes</th><th>Status</th><th>Manager ID</th></thead>';
      $('#employee').html('<table class="table table-responsive">'+newview.thead+newview.tbody+'</table>');
    
    });}
</script>

<script>
$(document).ready(function() {

    renderview();
    
    
});
</script>

