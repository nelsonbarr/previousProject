<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

   public function __construct(){
      parent::__construct();
   }

   public function getProducts(){
      return $this->db
         ->select('idproducts,name,description,image')
         ->from('products')                 
         ->get()         
         ->result();
   }

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */