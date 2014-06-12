<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	Class App_Model extends CI_Model {

		function cek_login($user,$pass) {
				
			$password 	= md5($pass);
			$set 		= $this->db->query("select * from MUser where UserID = '$user' and PwdUser = '$password'");
			return $set;
		}
		
		/* region menu */
		
		function menu($id){
			
			$set = $this->db->query("select a.*,b.ID_User,b.View,b.Create,b.Update,b.Delete,c.ID_User from Master_Menu a inner join MUserAkses b on(a.Menu_ID = b.Menu_ID)
inner join MUser c on (b.ID_User = c.ID_User) where c.ID_User = '$id' and a.parent_id = '0'");
			return $set;
		}
		
		function parent_menu($id,$key){
			$set = $this->db->query("select a.*,b.ID_User,b.View,b.Create,b.Update,b.Delete,c.ID_User from Master_Menu a inner join MUserAkses b on(a.Menu_ID = b.Menu_ID)
inner join MUser c on (b.ID_User = c.ID_User) where c.ID_User = '$id' and a.parent_id != '0' and a.parent_id = '$key'");
			return $set;
		}
		
		function cek_menu($id,$id_menu){
			
			$set = $this->db->query("select a.View,a.Create,a.Update,a.Delete from MUserAkses a where ID_User = '$id' and Menu_ID = '$id_menu'");
			return $set;
			
		} 
		
		/* end region menu */
		
		public function getSelectedData($table,$data)
		{
			return $this->db->get_where($table, $data);
		}

		public function getAllData($table){
			return $this->db->get($table);
		}

		public function getMaxKodePesanan()
		{
			$q = $this->db->query("select MAX(RIGHT(kode_pesanan,8)) as kd_max from tbl_pesanan_header");
			$kd = "";
			if($q->num_rows()>0){
				foreach($q->result() as $k){
					$tmp = ((int)$k->kd_max)+1;
					$kd = sprintf("%08s", $tmp);
				}
			}
			else{
				$kd = "00000001";
			}	
			return "PS".$kd;
		}
		
		function updateData($table,$data,$key,$ke)
		{
			$this->db->update($table,$data,$key,$ke);
		}
		
		
		function manualQuery($q){
			return $this->db->query($q);
		}
}
