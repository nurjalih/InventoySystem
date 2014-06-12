
	<style>
		#container1{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		background-color:#FFFFFF;
		width:520px;
	}

	.tambah {
		color: #444;
		background-color: transparent;
		font-size: 16px;
		font-weight: bold;
		margin: 0 0 5px 0;
		padding: 8px 15px 5px 40px;
		border-bottom:1px solid #ccc;
		background-image:url(assets/images/icn_edit_article.png);
		background-position:15px;
		background-repeat:no-repeat;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	.input-read-only,select {
		background-image:url(assets/images/bg-menu.jpg);
		background-position:top;
		background-repeat:repeat-x;
		border: 1px solid #D0D0D0;
		padding: 8px;
		background-color:#EEEEEE;
		outline:none;
		resize:none;
		font-family:Arial;
	}

	.btn-kirim-login {
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		padding: 9px 10px 9px 10px;
		background-image:url(assets/images/bg-menu.gif);
		background-repeat:repeat-x;
		background-position:center;
		color:#FFFFFF;
		cursor:pointer; 
		-moz-border-radius: 0px; 
		border-radius: 0px;width:60px;
	}
		.btn-kirim-reset {
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		padding: 12px 10px 9px 10px;
		background-image:url(assets/images/bg-menu.gif);
		background-repeat:repeat-x;
		background-position:center;
		color:#FFFFFF;
		cursor:pointer; 
		-moz-border-radius: 0px; 
		border-radius: 0px;width:20px;
	}
	.btn-kirim-login:hover { 
	text-decoration:none;
	font-weight:bold;
	
    }
	</style>
	
			
		<div id="body">
		<h3> Data Pelanggan</h3>
				<table width="" cellpadding="3" cellspacing="0">
				<tr><td width="130">Kode Pesanan</td><td width="20">:</td><td><input type="text" value="<?php echo $kode_pesanan; ?>" class="input-read-only" readonly="true" 
				 style="width:350px;" name="kode_pesanan" /></td></tr>
				<tr><td width="180">Nama Pelanggan</td><td>:</td><td>
				<select data-placeholder="Cari nama pelanggan..." class="chzn-select" style="width:5px;" tabindex="2" name="kode_pelanggan" id="kode_pelanggan">
          		<option value=""></option> 
					<?php
						foreach($dt_pelanggan->result_array() as $dp)
						{
						$pilih='';
						if($dp['kode_pelanggan']==$this->session->userdata("kd_pemesan"))
						{
						$pilih='selected="selected"';
					?>
						<option value="<?php echo $dp['kode_pelanggan']; ?>" <?php echo $pilih; ?>><?php echo $dp['nama_pelanggan']; ?></option>
					<?php
					}
					else
					{
					?>
						<option value="<?php echo $dp['kode_pelanggan']; ?>"><?php echo $dp['nama_pelanggan']; ?></option>
					<?php
					}
						}
					?>
				</select>
				</td></tr>
				<tr><td colspan="4"><div id="data_pelanggan"></div></td></tr>
			</table>
            <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.ui.js"></script>
			
			<script type="text/javascript">
			  $(".chzn-select").chosen().change(function(){ 
						var kode_pelanggan = $("#kode_pelanggan").val(); 
						$.ajax({ 
						url: "<?php echo base_url(); ?>pemesanan/ambil_data_pelanggan_ajax", 
						data: "kode_pelanggan="+kode_pelanggan, 
						cache: false, 
						success: function(msg){ 
						$("#data_pelanggan").html(msg); 
					} 
				})
				});
				$('#data_pelanggan').load('<?php echo base_url(); ?>pemesanan/ambil_data_pelanggan_session');
				
				$(document).ready(function() {
					$(".delbutton").click(function(){
					 var element = $(this);
					 var del_id = element.attr("id");
					 var info = del_id;
					 if(confirm("Anda yakin akan menghapus?"))
					 {
							 $.ajax({
							 url: "<?php echo base_url(); ?>pemesanan/hapus_pesanan", 
							 data: "kode="+info, 
							 cache: false, 
							 success: function(){
							 }
						 });	
					 	$(this).parents(".content").animate({ opacity: "hide" }, "slow");
						}
					 return false;
					 });
				})
				function enableButton()
				{
					document.frm.add.disabled=false;
				}
			</script>
			
			<script>
			
			
			
			
			</script>