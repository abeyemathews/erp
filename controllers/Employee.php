<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

        /**
	 * Pages
	 *  
	 */  
	public function index()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		//$this->load->view('Employees/index_view');
		$this->load->view('Employees/index');
	}
	public function index_view()
	{       
	        $this->load->model('Employee_model');
	        $data['emp']=$this->Employee_model->get_employee();
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/index_view',$data);
	}
       public function index_edit()
	{       
	        $this->load->model('Employee_model');
	        $data['emp']=$this->Employee_model->get_employee();
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/index_view',$data);
	}
	public function general()
	{		
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		//$this->load->view('Employees/index_view');
		$this->load->view('Employees/tablec');
	}
	public function addemp()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addemp($data);
                print_r($data);
	}
	public function empldd()
	{		
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/index_view');
		
	}
	
	public function skills()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Skills');
	}
	
	public function addskills()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addskills($data);
                print_r($data);
	}
	public function skills_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Skills_view');
	}
	public function education()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Education');
	}
	public function addeducation()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addeducation($data);
                print_r($data);
	}
	public function education_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Education_view');
	}
	public function certification()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Certification');
	}
	public function addcertification()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addcertification($data);
                print_r($data);
	}
	public function certification_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Certification_view');
	}
	public function languages()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Languages');
	}
	public function addlanguages()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addlanguages($data);
                print_r($data);
	}
	public function languages_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Languages_view');
	}
	public function dependents()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Dependents');
	}
	public function adddependents()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->adddependents($data);
                print_r($data);
	}
	public function dependents_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Dependents_view');
	}
	public function emergencycontact()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/EmergencyContact');
	}
	public function addemergencycontact()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->addemergencycontact($data);
                print_r($data);
	}
	public function emergencycontact_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/EmergencyContact_view');
	}
	public function document()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Document');
	}
	public function adddocument()
	{	$this->load->model('Employee_model');	
                $data=$this->input->post(); 
                $this->Employee_model->adddocument($data);
                print_r($data);
	}
	public function document_view()
	{
	        $this->load->view('Employees/head_emp');
	        $this->load->view('Employees/menu_emp');
		$this->load->view('Employees/Document_view');
	}
	
	/**
	 *  Models
	 *  
	 */
	public function empjson()
	{
		$this->load->model('Employee_model');
		$data=$this->Employee_model->get_employee();
		header('Content-Type: application/json');
		echo json_encode($data);
	
	}
	
	
}
