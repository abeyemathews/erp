<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

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
	public function index()
	{
		$this->load->view('Department/head_dep');
	        $this->load->view('Department/menu_dep');
	        $this->load->view('Department/index');
	}
	
	//public function index_view()
	//{       
	//        $this->load->model('Department_model');
	//        $data['dep']=$this->Department_model->get_department();
	//       /* print_r($data);*/
	//       	$this->load->view('Department/index_view',$data);
	//	
	//}
	public function index_view()
	{       
	        $this->load->view('Department/head_dep');
	        $this->load->view('Department/menu_dep');
	        $this->load->view('Department/index_view');
	        
	}
	public function depdd()
	{       
	         $this->load->view('Department/head_dep');
	        $this->load->view('Department/menu_dep');
	        $this->load->view('Department/depdd');
	        
	}   
	public function empjson()
	{
		$this->load->model('Department_model');
		$data=$this->Department_model->get_department();
		header('Content-Type: application/json');
		echo json_encode($data);
	
	}
}
