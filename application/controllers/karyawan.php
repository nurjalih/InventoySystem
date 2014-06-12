<?php
	Class Karyawan extends CI_Controller{
	
		function __construct(){
			parent::__construct();
			//$this->load->model(array('barang_m'));
			$this->load->library('pagination');
		}

		function index(){
			$data['judul']="Karyawan";
			$data['judul2']="";
            $data['name']=$this->session->userdata("username");
			$data['content']= $this->load->view('karyawan/tampil',$data,true);
			$this->load->view("atas_v");
			$this->load->view("utama_v",$data);
		}
		
		function add(){
		$data['judul']="Karyawan";
		$data['judul2']="";
		$data['content']= $this->load->view('iuser_v',$data,true);
		$this->load->view('main_v', $data);
	   }
		

	}
?>