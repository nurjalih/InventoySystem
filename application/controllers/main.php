<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct(){
			parent::__construct();
			$this->load->model(array('app_model'));
			$this->load->library(array('table','session'));
	}
	
	function index(){
			
		$data 	= array();
			
		$data['judul']="";
		$data['judul2']="";
	    $data['id_user']  	= $this->session->userdata("ID_User"); 
	    $data['username'] 	= $this->session->userdata("UserID");
	    $data['level']		= $this->session->userdata("LevelUser");
	    
		$data['content']= "";
			
		$data['menu']	= $this->app_model->menu($data['id_user']);
		
		$this->load->view("header");
		$this->load->view("utama",$data);
	}
}
