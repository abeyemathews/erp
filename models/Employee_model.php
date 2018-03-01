<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

       

        public function get_employee()
        {
                
                $result=$this->db->get('employee_details')->result_array();
                return $result; 
                
        }
        public function addemp($data)
        {
               
                $this->db->insert('employee_details', $data);
                 print_r($data);
        }
        public function addskills($data)
        {
               
                $this->db->insert('employee_skills', $data);
                 print_r($data);
        }
        public function addeducation($data)
        {
               
                $this->db->insert('employee_edu', $data);
                 print_r($data);
        }
        public function addcertification($data)
        {
               
                $this->db->insert('employee_certif', $data);
                 print_r($data);
        }
        public function addlanguages($data)
        {
               
                $this->db->insert('employee_lang', $data);
                 print_r($data);
        }
        public function adddependents($data)
        {
               
                $this->db->insert('employee_depd', $data);
                 print_r($data);
        }
        public function addemergencycontact($data)
        {
               
                $this->db->insert('employee_econt', $data);
                 print_r($data);
        }
        public function adddocument($data)
        {
               
                $this->db->insert('employee_doc', $data);
                 print_r($data);
        }
     
        

}