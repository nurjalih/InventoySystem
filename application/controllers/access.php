<?php
	Class Access extends CI_Controller{
	
		function index(){
            $this->load->view('access/tampil');
	
		}
		
       function menu(){
	   $dt= $this->input->post('barang');  
       if ( $dt=="1"){
	   $dta['status']='Y';
	   }
	   else{
	   $dta['status']='N';
	   }
	   $dt1= $this->input->post('customer');  
       if ( $dt1=="2"){
	   $dta1['status']='Y';
	   }
	   else{
	   $dta1['status']='N';
	   }
	   
	   
	   
	   $k['access_id'] = '1';
	   $k1['access_id'] = '2';
	   $this->app_model->updateData("access",$dta,$k);
	   $this->app_model->updateData("access",$dta1,$k1);
	   
	   
	   $k['access_id'] = '1';
	   $ac['Leved_id'] ='101';
	   $k1['access_id'] = '2';
	   $ac1['Leved_id'] ='102';
	   $this->app_model->manualQuery("update access set status='".$dta['status']."' where Level_id='".$ac['Leved_id']."' and access_id='".$k['access_id']."'");
	   $this->load->view('access/access',$dta);
	   
	   }
       
	   function tampil(){
	   
		$data['menu'] =	$this->app_model->manualQuery(" select status,access.menu_id as id,menu from access join menu on access.menu_id=menu.menu_id where Level_id='102' ");
	   
	     $this->load->view('access/access',$data);
	   
	   
	   
	   

	   
	   }
	}
?>