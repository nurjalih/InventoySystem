<?php
	Class Pemesanan extends CI_Controller{

		function __construct(){
			parent::__construct();
			//$this->load->model(array('barang_m'));
			$this->load->library('pagination');
		}

		function index(){
			$data['judul']="Pemesanan";
			$data['judul2']="";
            $data['name']=$this->session->userdata("username");
			$data['content']= $this->load->view('pemesanan/tampil',$data,true);
			$this->load->view("atas_v");
			$this->load->view("utama_v",$data);
		}
	   
		function tambah(){
			$data['judul']="Pemesanan";
			$data['judul2']="Tambah";
			$data['name']=$this->session->userdata("username");
			$data['dt_pelanggan']=$this->app_model->getAllData("tbl_pelanggan");
			$data['kode_pesanan']=$this->app_model->getmaxKodePesanan();
			$data['content']= $this->load->view('pemesanan/tambah',$data,true);
			$this->load->view("atas_v");
			$this->load->view("utama_v",$data);
		}
		
	public function ambil_data_pelanggan_ajax()
	{
		
			$data["kode_pelanggan"] = $_GET["kode_pelanggan"];
			$sess_data['kd_pemesan'] = $data["kode_pelanggan"];
			$this->session->set_userdata($sess_data);
			$q = $this->app_model->getSelectedData("tbl_pelanggan",$data);
			foreach($q->result() as $d)
			{
			?>
			<table cellpadding="5" cellspacing="0" border="0">
			<tr><td width="200">Kode Pelanggan</td><td width="20">:</td><td><input type="text" value="<?php echo $d->kode_pelanggan; ?>" class="input-read-only" readonly="true" 
			 style="width:500px;" /></td></tr>
			<tr><td>Alamat Pelanggan</td><td>:</td><td><input type="text" value="<?php echo $d->alamat; ?>" class="input-read-only" readonly="true" style="width:500px;" /></td></tr>
			<tr><td>No Telepon</td><td>:</td><td><input type="text" value="<?php echo $d->no_telp; ?>" class="input-read-only" readonly="true" style="width:500px;" /></td></tr>
			</table>
			<?php
			}
		
		
	}
	
	public function ambil_data_pelanggan_session()
	{
		
			if($this->session->userdata("kd_pemesan")!=NULL)
			{
				$data["kode_pelanggan"] = $this->session->userdata("kd_pemesan");
				$q = $this->app_model->getSelectedData("tbl_pelanggan",$data);
				foreach($q->result() as $d)
				{
					$kode_pelanggan = $d->kode_pelanggan;
					$alamat = $d->alamat;
					$no_telp = $d->no_telp;
				}
			}
			else
			{
				$kode_pelanggan = "";
				$alamat = "";
				$no_telp = "";
			}
			
			?>
			<table cellpadding="5" cellspacing="0" border="0">
			<tr><td width="200">Kode Pelanggan</td><td width="20">:</td><td><input type="text" value="<?php echo $kode_pelanggan; ?>" class="input-read-only" readonly="true" 
			 style="width:500px;" /></td></tr>
			<tr><td>Alamat Pelanggan</td><td>:</td>
			<td><input type="text" value="<?php echo $alamat; ?>" class="input-read-only" readonly="true" style="width:500px;" /></td></tr>
			<tr><td>No Telepon</td><td>:</td><td><input type="text" value="<?php echo $no_telp; ?>" class="input-read-only" readonly="true" style="width:500px;" /></td></tr>
			</table>
			<?php
		
		
	}
	public function ambil_data_barang()
	{
		$cek = $this->session->userdata('login');
		if(!empty($cek))
		{
			$data["kode_barang"] = $_GET["kode_barang"];
			$q = $this->app_model->getSelectedData("tbl_barang",$data);
			foreach($q->result() as $d)
			{
			?>
			<table cellpadding="0" cellspacing="0" border="0">
			<tr><td width="130">Kode Barang</td><td width="20">:</td><td><input type="text" value="<?php echo $d->kode_barang; ?>" class="input-read-only"
			 style="width:350px;" name="kode_barang" readonly="readonly" /></td></tr>
			<tr><td>Nama Barang</td><td>:</td><td><input type="text" value="<?php echo $d->nama_barang; ?>" class="input-read-only" style="width:350px;" name=
			"nama_barang" readonly="readonly" /></td></tr>
			<tr><td>Harga</td><td>:</td><td><input type="text" value="<?php echo $d->harga_barang; ?>" class="input-read-only" style="width:280px;" name=
			"harga_barang" id="hargabarang" readonly="readonly" /> <input type="checkbox" onclick="bolehUbah();" /> Edit Harga</td></tr>
			<tr><td>Jumlah</td><td>:</td><td>
			<select name="jumlah_barang" class="input-read-only" class="chzn-select">
			<?php
				for($i=0;$i<=$d->stok;$i++)
				{
			?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php
				}
			?>
			</select>
			</td></tr>
			</table>
			<?php
			}
		}
		else
		{

		
				header('location:'.base_url().'login');
			
		}
	}	

	}
?>