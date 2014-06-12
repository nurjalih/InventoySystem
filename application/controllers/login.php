<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model(array('app_model'));
			$this->load->library(array('table'));
		}
		
		public function index()
		{
			$data['title'] = "Login Administrator";
			$data['alert'] = '';
			$this->load->view('login',$data);
		}
		
		public function ceklogin() {
			
			$data = array();
			$data['username'] = $this->input->post("name");
			$data['password'] = $this->input->post("pass");
			
			/* panggil fungsi cek login di sini */
			$cek_data 		  = $this->app_model->cek_login($data['username'],$data['password']);
			
			if(count($cek_data->result())>0):
				foreach($cek_data->result() as $value):
					
					$config['ID_User']		= $value->ID_User;
					$config['UserID']		= $value->NamaUser;
					$config['LevelUser']	= $value->LevelUser;
					
					$this->session->set_userdata($config);
				
				endforeach;
			
			header('location:'.base_url().'main');
			
			endif;
			
			if(count($cek_data->result()) < 0 || count($cek_data->result()) == 0):
			
				$this->session->set_flashdata('result_login','Username atau Password yang anda masukkan salah.');
				header('location:'.base_url().'login');
			
			endif;
			
		}

		function logout(){
			$data = array('username' => '','level' => '');
			$this->session->set_userdata($data);
			redirect('login', 'refresh');
		}	
}
