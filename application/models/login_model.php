<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

   public function __construct(){
      parent::__construct();
   }

   public function login($login,$password){
      return $this->db
         ->select('iduser,name,email')
         ->from('users')
         ->where('email',$login)
         ->where('pass',$password)
         ->get()
         ->result_array();
   }


}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */