<script>
function Employee(data) {
    this.emp= data.info;
    this.thead='';
    this.tbody= '';
    this.tfoot= '';
    this.empid= 0;
    this.filtered=[];
    
}
Employee.prototype.buildthead= function(c,h) {
    var empdata=this.emp;
    var head='';
    $.each(empdata,function( index, value ) {
    head=head+'<option value="'+eval(h)+'">'+eval(c)+'</option>';//Converting string to expression-eval
    //alert(head);
});
this.thead=head;

};

</script>


<script>
function renderview(a,c,f,g,h){ 

$.post(a,
    {
        
    },
    function(data,status){
       
       var empinfo={info:data}; 

      newview =new Employee(empinfo);       
      newview.buildthead(c,h);
     
      $(f).html('<select class="form-control" id="'+g+'" name="'+g+'">'+newview.thead+'</select>');
    
    });}
    
    
  
</script>


<script>
$(document).ready(function() {
var a="http://absmedicalengineering.com/erp/index.php/employee/empjson"; // JSON Data Source
var c="value.emp_fname";        //Selecting Specified Column from JSON Data Source
var f='#emp_employeed';        //View Page id ..data will be attached to this id
var g="emp_employee";          //Specifie tag id and name in view page
var h="value.emp_id";  
 renderview(a,c,f,g,h);
var a="http://absmedicalengineering.com/erp/index.php/employee/empjson"; // JSON Data Source
var c="value.emp_fname";        //Selecting Specified Column from JSON Data Source
var f='#emp_supervisord';        //View Page id ..data will be attached to this id
var g="emp_supervisor";          //Specifie tag id and name in view page
var h="value.emp_id";  
 renderview(a,c,f,g,h);

var a="http://absmedicalengineering.com/erp/index.php/department/empjson";
var c="value.departmentname";
var f='#emp_departmentd';
var g="emp_department";
var h="value.deptid";  
 renderview(a,c,f,g,h);
});
</script>

