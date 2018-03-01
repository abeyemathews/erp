<?php //print_r($emp); 
$output = '';
foreach ($emp as $result) {
    
            
            $output .= '<p id="numberOfEmployees">
                '.$result['count(*)'].' Employees
            </p>
	
	';
	
     
}
echo  $output;

?>

