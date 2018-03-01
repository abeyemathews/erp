<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

       

        public function get_employee()
        {
                
                //$result=$this->db->get('employee_details')->result_array();
                $sql = $this->db->query('SELECT count(*) FROM employee_details where seen_status=1 order by emp_id desc');
               return $sql->result_array();
                //return $result; 
                
        }
        public function get_employee_update()
        {
                
                //$result=$this->db->get('employee_details')->result_array();
                $sql = $this->db->simple_query('update employee_details set seen_status=1 where seen_status=0');
               //return $sql->result_array();
               
                //return $result; 
                
        }
        


        

}