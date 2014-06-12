<?php
	Class Customer extends CI_Controller{

		function index(){
			$cek = $this->session->userdata('level');
			if(!empty($cek)){
				$data['judul']="Customer";
				$data['judul2']="";
				$data['name']=$this->session->userdata("username");
				$data['content']= $this->load->view('customer/tampil',$data,true);
				$this->load->view("atas_v");
				$this->load->view("utama_v",$data);
			}
			else{
				header('location:'.base_url().'login');
			}
		}
		


	}
?>