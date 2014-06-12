<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	Class Master_barang extends CI_Controller{
	
		function index(){
			
			/* parameter */
			$id_menu	= $this->uri->segment(3);
			$id_user	= $this->session->userdata("ID_User");
			$level		= !empty($this->session->userdata("LevelUser")) ? $this->session->userdata("LevelUser") : "";
			/* end parameter */
			
			if($level == ""):
				header('location:'.base_url().'login');
			endif;
			if($level != ""):
				
				$cek = $this->app_model->cek_menu($id_user,$id_menu);
				foreach($cek->result_array() as $param):
					$view 	= $param['View'];
					$create	= $param['Create'];
					$update = $param['Update'];
					$delete = $param['Delete'];
				endforeach;
				
				if($view == '1'):
					
					$data = array();
					
					$data['create']		= $create;
					$data['update']		= $update;
					$data['delete']		= $delete;
					$data['level']		= $level;
					$data['judul']		= "Master Barang";
					$data['judul2']		= "";
					$data['menu']		= $this->app_model->menu($id_user);
					$data['barang']		= $this->app_model->getAllData('Master_Barang');
					$data['group']		= $this->app_model->getAllData('Master_Part_Group');
					$data['satuan']		= $this->app_model->getAllData('Master_Satuan');
					$data['partcode']	= $this->app_model->getAllData('Master_PartCode1');
					$data['merk']		= $this->app_model->getAllData('Master_Part_Merk');
					$data['tipe']		= $this->app_model->getAllData('Master_Part_Tipe');
					$data['pricelist']	= $this->app_model->getAllData('PriceList_Barang');
					$data['content']	= $this->load->view('barang/index',$data,true);
					$this->load->view("header");
					$this->load->view("utama",$data);	
		
				endif;
				if($view == 0):
					header('location:'.base_url().'main');
				endif;
			endif;
		}
		
		function caridata(){
			$PartNo= $this->input->post('PartNo');
			$tabel = $this->db->query("SELECT NamaPart as a,BeratKgs,Aktif ,PartCode1,Satuan,Keterangan,QtyMin,QtyMax,
			(SELECT NamaGroup FROM master_barang INNER JOIN master_part_group on master_barang.GroupPart = master_part_group.KodeGroup WHERE PartNo='$PartNo') as b ,
			(SELECT NamaMerk FROM master_barang INNER JOIN master_part_merk ON master_barang.merk=master_part_merk.merk WHERE PartNo='$PartNo') as c,
			(SELECT NamaTipe FROM master_barang INNER JOIN master_part_tipe ON master_barang.tipe=master_part_tipe.tipe WHERE PartNo='$PartNo') as Tipe
			
			FROM master_barang WHERE PartNo='$PartNo'");
			$row = $tabel->num_rows();
			if($row>0){
				foreach($tabel->result() as $t){
					$data['NamaPart'] = $t->a;
					$data['NamaGroup'] = $t->b;
					$data['PartCode1'] = $t->PartCode1;
					$data['Satuan'] = $t->Satuan;
					$data['BeratKgs'] = $t->BeratKgs;
					$data['NamaMerk'] = $t->c;
					$data['Aktif'] = $t->Aktif;
					$a=$data['Aktif'];
					if ($a=='1'){
					  $data['Aktif']='Y';
					}else{
					  $data['Aktif']='N';
					}
					$data['Keterangan'] = $t->Keterangan;
					$data['NamaTipe'] = $t->Tipe;
					$data['QtyMin'] = $t->QtyMin;
					$data['QtyMax'] = $t->QtyMax;
					echo json_encode($data);
				}
			}else{
				$data['NamaPart'] ='';
				$data['NamaGroup'] ='';
				$data['NamaMerk'] ='';
				$data['PartCode1'] ='';
				$data['Satuan'] ='';
				$data['GroupPart'] ='';
				$data['BeratKgs'] ='';
				$data['Aktif'] = '';
				$data['Keterangan'] ='';
				$data['NamaTipe'] ='';
				$data['QtyMin'] = '';
				$data['QtyMax'] ='';
				echo json_encode($data);
			}
			
		}
		
		function carigroup(){
		 
			$data['Group']= $this->input->post('SGroup');
			echo json_encode($data);
		}
		
		function caripartcode(){
		 
			$data['PartCode']= $this->input->post('SPartCode');
			echo json_encode($data);
		}
		
		function caristatus(){
		 
			$data['Status']= $this->input->post('Status');
			echo json_encode($data);
		}
		
		function caritipe(){
		 
			$data['Tipe']= $this->input->post('STipe');
			echo json_encode($data);
		}
		
		function MigrasiPartNo(){
			
			$data['']=$this->input->post('');
			$data['name_tj']=$this->input->post('name_tj');
			$data['kgs_tj']=$this->input->post('kgs_tj');
			$data['code_tj']=$this->input->post('code_tj');
		    $data['stock_tj']=$this->input->post('stock_tj');
		
		
		
		}
		
		function updatebarang(){
		   
			$data['NamaPart']=$this->input->post('Name');
			
			$a=$this->input->post('Group');
				if($a=='SPARE PART'){
					$data['GroupPart']='1';
				}
				elseif ($a=='ACCESORIES'){
					$data['GroupPart']='2';
				}
				elseif ($a=='OLI'){
					$data['GroupPart']='3';
				}else{
					$data['GroupPart']='4';
				}
			
			$b=$this->input->post('PartCode');
				if($b=='MITSUBISHI'){
					$data['PartCode1']='M';
				}
				elseif ($b=='FORKLIFT'){
					$data['PartCode1']='F';
				}
				elseif ($b=='ASSEMBLY'){
					$data['PartCode1']='A';
				}
				elseif ($b=='KOMATSU'){
					$data['PartCode1']='K';
				}
				elseif ($b=='NR'){
					$data['PartCode1']='N';
				}else{
					$data['PartCode1']='T';
				}
				
			$data['Satuan']=$this->input->post('Satuan');
			
			
			
			$data['BeratKgs']=$this->input->post('BeratKgs');
			$data['Merk']=$this->input->post('NamaMerk');
			$data['Tipe']=$this->input->post('Tipe');
			$data['Keterangan']=$this->input->post('Keterangan');
			
			$status=$this->input->post('Aktif');
			if($status=='Y'){
				$data['Aktif']='1';
			}else{
				$data['Aktif']='0';
			}
			
			//$data['Forklit']=$this->input->post('Forklit');
			$key['PartNo']=$this->input->post('PartNo');
			
			
			$this->app_model->updateData('Master_Barang',$data,$key);
			
			
			header('location:'.base_url().'barang');
		}
			
	}
	
?>
