<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {

       

        public function get_department()
        {
                
                $result=$this->db->get('department_details')->result_array();
                return $result;
                
        }

        

}