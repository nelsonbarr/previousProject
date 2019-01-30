<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_ajax extends CI_Controller {

	private $request;
   	public function __construct(){
    	parent::__construct();
      	$this->load->model('products_model');      	
      	$this->request = json_decode(file_get_contents('php://input'));
   	}	
	public function index()
	{
		
	}

	public function get_products(){
		$products=$this->products_model->getProducts();      	
      	echo json_encode($products);
   }

}

/* End of file products_ajax.php */
/* Location: ./application/controllers/products_ajax.php */