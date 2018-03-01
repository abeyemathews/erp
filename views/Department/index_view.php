<div class="container">
  <h2>Department</h2>
  <p></p> 

<div id="content" class="fluid-container">

</div>

</div>
<script>
$(document).ready(function() {

    mySnfn();
    
    
});
</script>

<script>
function myfirstfn(tdldata) 
{

var temp='';
$.each(tdldata,function( index, value ) {
  //alert( JSON.stringify(value));
  temp=temp+'<tr>'+'<td>'+value.deptid+'</td>'+'<td>'+value.departmentname+'</td>'+'<td>'+value.place+'</td>'+'<td>'+value.status+'</td>'+'</tr>';
 
});
 return '<table class="table table-striped"> <thead> <tr><th>Dept ID</th> <th>Department Name</th><th>Place</th><th>Status</th></thead><tbody>'+temp+'</tbody></table>';

}
</script>



<script>
function mySnfn(){
$.post("http://absmedicalengineering.com/erp/index.php/department/empjson",
    {
        
    },
    function(data, status){
        
    var htmltb= myfirstfn(data) ;
    
    $('#content').html(htmltb);
    });}
</script>


