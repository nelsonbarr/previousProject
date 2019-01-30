<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }

	public function index()
	{		
        $this->load->view("login_view");    
		
	}

	public function login(){
		$login=$this->input->post("login");
		$password=$this->input->post("password");
		$result=$this->login_model->login($login,$password);
		$this->load->model('products_model');
		$products=$this->products_model->getProducts();
		if(count($result)>0){
			redirect('products', 'refresh');
		}
		else{
			$data = array(
                'user_login' => -1,
            );
            $this->session->set_flashdata('error', "Autenticacion fallida");
            redirect('login', 'refresh');
		}

	}



}

/* End of file login.php */
/* Location: ./application/controllers/login.php */