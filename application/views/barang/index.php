
<script type="text/javascript">
$(document).ready(function(){
	$("#PartNo").keyup(function(){
		CariPartNo();
	});

	$("#PartNo").change(function(){
		CariPartNo();
	});
	
	function CariPartNo(){
		var PartNo = $("#PartNo").val();
		var stringt = "PartNo="+PartNo;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/master_barang/caridata",
			data	: stringt,
			cache	: false,
			dataType: "json",
			success	: function(data){
				$("#Name").val(data.NamaPart);
				$("#Group").val(data.NamaGroup);
				$("#PartCode").val(data.PartCode1);
				$("#Satuan").val(data.Satuan);
				$("#BeratKgs").val(data.BeratKgs);
				$("#NamaMerk").val(data.NamaMerk);
				$("#Aktif").val(data.Aktif);
				$("#Keterangan").val(data.Keterangan);
				$("#Tipe").val(data.NamaTipe);
				$("#QtyMin").val(data.QtyMin);
				$("#QtyMax").val(data.QtyMax);
			}
		});
	}

	function CariGroup(){
		var SGroup= $("#SGroup").val();
		var string = "SGroup="+SGroup;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/master_barang/carigroup",
            data	: string,
			cache	: false,
			dataType: "json",
			success	: function(data){
				$("#Group").val(data.Group);
			}
		});
	}
  
  	$("#SGroup").change(function(){
		CariGroup();
	});
 
 	function CariPartCode(){
		var SPartCode= $("#SPartCode").val();
		var string = "SPartCode="+SPartCode;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/master_barang/caripartcode",
            data	: string,
			cache	: false,
			dataType: "json",
			success	: function(data){
				$("#PartCode").val(data.PartCode);
			}
		});
	}
  
  	$("#SPartCode").change(function(){
		CariPartCode();
	});
	
	 function CariStatus(){
		var Status= $("#Status").val();
		var string = "Status="+Status;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/master_barang/caristatus",
            data	: string,
			cache	: false,
			dataType: "json",
			success	: function(data){
				$("#Aktif").val(data.Status);
			}
		});
	}
  
  	$("#Status").change(function(){
		CariStatus();
	});
	
		
	 function CariTipe(){
		var STipe= $("#STipe").val();
		var string = "STipe="+STipe;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/master_barang/caritipe",
            data	: string,
			cache	: false,
			dataType: "json",
			success	: function(data){
				$("#Tipe").val(data.Tipe);
			}
		});
	}
  
  	$("#STipe").change(function(){
		CariTipe();
	});
});
</script>
<style>
.brd{
border: #c1cad5 solid 1px;
}
input[type='text'],textarea{
		border: 1px solid #A9A9A9;
		
		background-color:#fff;
		outline:none;
		resize:none;
		font-family:Arial;
}
</style>

<h3 class="heading-1 clearfix">
  Data Barang
</h3>



<div style='display:block;margin:0 0 -5em 17em;'>
	<div style='margin:1em 0 -2.5em 9.9em;'>
		<div id="theme-demo" class="button-group mrg10R  tooltip-button" data-placement="top" title='Buka / Tutup' style='text-align:center;background:#C8C8FE;width:100px;height:20px;margin:0 0 0 0;border-top-left-radius:3px;border-bottom-left-radius:3px;'>
			<a class="popover-button"  href="javascript:;" data-id="#theme-styling5" data-toggle="popover" data-placement="bottom" style='color:#778899;'>
			List Daftar Harga
			</a>
		</div>
	</div>
	
	<div style='margin:1em 0 -1.55em 17.67em;'>
		<div id="theme-demo" class="button-group mrg10R  tooltip-button" data-placement="top" title='Buka / Tutup' style='text-align:center;background:#C8C8FE;width:100px;height:20px;margin:0 0 0 0;'>
			<a class="popover-button" href="javascript:;" data-id="#theme-styling4" data-toggle="popover" data-placement="bottom" style='color:#778899;'>
			Price List
			</a>
		</div>
	</div>

	<div style='margin:0 0 -4em 25.45em;'>
		<div id="theme-demo" class="button-group mrg10R  tooltip-button"data-placement="top" title='Buka / Tutup' style='text-align:center;background:#C8C8FE;width:100px;height:20px;margin:0 0 0 0;'>
			<a class="popover-button" href="javascript:;" data-id="#theme-styling" data-toggle="popover" data-placement="bottom" style='color:#778899;'>
			History Part No
			</a>
		</div>
	</div>

	<div style='margin:2.45em 0 0 33.2em;'>
		<div id="theme-demo" class="button-group mrg10R  tooltip-button" data-placement="top" title='Buka / Tutup' style='text-align:center;background:#C8C8FE;width:100px;height:20px;margin:0 0 0 0;'>
			<a class="popover-button" href="javascript:;" data-id="#theme-styling1" data-toggle="popover" data-placement="bottom" style='color:#778899;'>
			Ubah Part No
			</a>
		</div>
	</div>

	<div style='margin:-20px 0 0 41em;'>
		<div id="theme-demo" class="button-group mrg10R  tooltip-button"data-placement="top" title='Buka / Tutup' style='text-align:center;background:#C8C8FE;width:100px;height:20px;margin:0 0 0 0;border-bottom-right-radius:3px;border-top-right-radius:3px;'>
			<a class="popover-button" href="javascript:;" data-id="#theme-styling2" data-toggle="popover" data-placement="bottom" style='color:#778899;'>
			Migrasi Part No
			</a>
		</div>
	</div>
</div>
<!--view PriceList -->
<div id="theme-styling4" class="hide" >
	<div class="small-box" style='width:550px;height:370px;overflow-x:auto;'>
		<div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Price List</div>

		<table class="table table-condensed">
			<thead>
				<tr>
					<th></th>
					<th>Part No</th>
					<th>PartDesc</th>
					<th>Harga beli</th>
					<th>Jenis</th>
					<th>Curr</th>
				</tr>
			</thead>
			
	
		</table>
		
				
	</div>
</div>
<!--view list daftar harga -->
<div id="theme-styling5" class="hide" >
	<div class="small-box" style='width:550px;'>
		<div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">List Daftar Harga</div>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th></th>
					<th>Part No</th>
					<th>Harga Jual</th>
					<th>Keterangan</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Hide</th>
				</tr>
			</thead>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</table>
		
		<div class="pad10A button-pane button-pane-alt text-center">
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Proses</span></a>
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Cancel</span></a>
		</div>
	</div>
</div>

<!--view historyPart No -->
<div id="theme-styling" class="hide" >
	<div class="small-box" style='width:550px;'>
		<div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">History Part No</div>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th></th>
					<th>Part No</th>
					<th>Harga Jual</th>
					<th>Keterangan</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Hide</th>
				</tr>
			</thead>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</table>
		
		<div class="pad10A button-pane button-pane-alt text-center">
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Proses</span></a>
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Cancel</span></a>
		</div>
	</div>
</div>

<!--view ubah Part No -->
<div id="theme-styling1" class="hide" >
	<div class="small-box" style='width:550px;'>
		<div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Ubah Part No</div>
		<table class="table table-condensed">
			<thead>
				<tr>
					<th></th>
					<th>Part No</th>
					<th>Harga Jual</th>
					<th>Keterangan</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Hide</th>
				</tr>
			</thead>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</table>
		
		<div class="pad10A button-pane button-pane-alt text-center">
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Proses</span></a>
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Cancel</span></a>
		</div>
	</div>
</div>

<!--view Migrasi Part No -->
<div id="theme-styling2" class="hide" >
	<div class="small-box" style='width:300px;'>
		<div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Migrasi Part No</div>
		<fieldset>
		<legend>Part No.Asal</legend>
		<table>
			<tr>
				<td>Part No</td><td><input type='text' name='part' style='width:120px;'/></td>
			</tr>
			<tr>
				<td>Part Name</td><td><input type='text' name='name' style='width:200px;'/></td>
			</tr>
			<tr>
				<td>Kgs</td><td><input type='text' name='kgs' style='width:60px;'/></td>
			</tr>
			<tr>
				<td>Part Code</td><td><input type='text' name='code' style='width:60px;'/></td>
			</tr>
			<tr>
				<td>Stock Akhir</td><td><input type='text' name='stock' style='width:60px;'/></td>
			</tr>
		</table>
		</fieldset>
		<fieldset>
		<legend>Part No.Tujuan</legend>
		<table>
			<tr>
				<td>Part No</td><td><input type='text' name='part_tj' style='width:120px;'/></td><td><input type=text name='part_tj' style='width:20px;'/></td>
			</tr>
			<tr>
				<td>Part Name</td><td colspan='2'><input type='text' name='name_tj' style='width:200px;'/></td><td></td>
			</tr>
			<tr>
				<td>Kgs</td><td colspan=2><input type='text' name='kgs_tj' style='width:60px;'/></td><td></td>
			</tr>
			<tr>
				<td>Part Code</td><td colspan=2><input type='text' name='code_tj' style='width:60px;'/></td><td></td>
			</tr>
			<tr>
				<td >Stock Akhir</td><td colspan=2><input type='text' name='stock_tj' style='width:60px;'/></td><td></td>
			</tr>
		</table>
		</fieldset>
		<div class="pad10A button-pane button-pane-alt text-center">
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Proses</span></a>
			<a href="#" class="btn medium bg-black"><span class="button-content text-transform-upr font-bold font-size-11">Cancel</span></a>
		</div>
	</div>
</div>
</br></br>
    <form method='post' action='<?php echo base_url(); ?>index.php/barang/updatebarang' >
	<table>
		<tr>
			<td>Part No</td>
			<td>
			<input type='text' name="PartNo" id="PartNo" />

			
		</tr>
		<tr>
			<td>Nama Part</td>
			<td><input type='text' name="Name" id="Name"/></td>
		</tr>
	</table>
	</br>		
    <div class="example-code">
        <div class="tabs">
            <div class="button-block-justified">
                <ul>
                    <li>
                        <a href="#justified-tabs-1" title="Tab 1">
                            <i class="glyph-icon icon-cogs float-left opacity-80"></i>
                            Detail Part
                        </a>
                    </li>
                    <li>
                        <a href="#justified-tabs-2" title="Tab 2">
                            <i class="glyph-icon icon-cogs float-left opacity-80"></i>
                            Substitusi Part
                        </a>
                    </li>
                    <li class="mobile-hidden">
                        <a href="#justified-tabs-3" title="Tab 3">
                            <i class="glyph-icon icon-cogs float-left opacity-80"></i>
                            Lokasi Part
                        </a>
                    </li>
                    <li class="mobile-hidden">
                        <a href="#justified-tabs-4" title="Tab 4">
                            <i class="glyph-icon icon-cogs float-left opacity-80"></i>
                            History Migrasi
                        </a>
                    </li>
                </ul>
            </div>
			
			<!-- tab 1 content -->
            <div id="justified-tabs-1">
			   <table >
					<tr>
						<td>Group Part</td><td width='170'><input type='text' value='' id='Group' name='Group' style='width:174px;'/></td>
						<td><select name='SGroup' id='SGroup'>
						     <option>- pilih -</option>
							<?php
							foreach($group->result_array() as $db){?>
							<option value='<?php echo $db['NamaGroup'];?>'><?php echo $db['NamaGroup'];?></option>
							
							<?php
							}?>
						</select></td>
					</tr>
					<tr>
						<td>Part Code</td><td ><input type='text' value='' id='PartCode' name='PartCode' style='width:174px;'/></td>
						<td>
						<select name='SPartCode' id='SPartCode'>
						    <option>- pilih -</option>
							<?php
							foreach($partcode->result_array() as $db){?>
							<option value='<?php echo $db['PCode1Desc'];?>'><?php echo $db['PCode1Desc'];?></option>
							
							<?php
							}?>
						</select></td>
					</tr>
					<tr>
						<td>Satuan</td><td><input type='text' value='' id='Satuan' name='Satuan' style='width:174px;'/></td>
						<td><select>
						     <option>- pilih -</option>
							<?php
							foreach($satuan->result_array() as $db){?>
							<option value=''><?php echo $db['NamaSatuan'];?></option>
							
							<?php
							}?>
						</select></td>
					</tr>
				    <tr>
						<td>Berat(Kgs)</td><td><input type='text' value='' id='BeratKgs' name='BeratKgs' style='width:174px;'/></td>
					</tr>
					<tr>
						<td>Forklit Series</td><td ><textarea style='width:170px;'name="Forklit" rows="3"></textarea></td>
						<td></td>
					</tr>
					<tr>
						<td>Merk Part</td><td><input type='text' value='' id='NamaMerk' name='NamaMerk'style='width:174px;'/></td>
						<td><select>
						     <option>- pilih -</option>
							<?php
							foreach($merk->result_array() as $db){?>
							<option value='<?php echo $db['Merk'];?>'><?php echo $db['NamaMerk'];?></option>
							
							<?php
							}?>
						</select></td>
					</tr>
					<tr>
						<td>Tipe Part</td><td><input type='text' value='' id='Tipe' name='Tipe' style='width:174px;'/></td>
						<td><select name='STipe' id='STipe'>
						     <option>- pilih -</option>
							<?php
							foreach($tipe->result_array() as $db){?>
							<option value='<?php echo $db['NamaTipe'];?>'><?php echo $db['NamaTipe'];?></option>
							
							<?php
							}?>
						</select></td>
					</tr>
					<tr>
						<td>Keterangan</td><td colspan='2'><textarea name='Keterangan' id='Keterangan' rows="3" style='width:170px;'></textarea></td>
					</tr>
					<tr>
						<td>Status Part</td><td><input type='text'  value='' name='Aktif' id='Aktif' style='width:20px;'/> Aktif</td>
						<td>
						<select Name='Status' id='Status'>
						     <option>- pilih -</option>
						     <option value='Y'>Y</option>
						     <option value='N'>N</option>
						</select></td>
					</tr>
			    </table>
			   
			   <div style='margin:-19em 0 0 35em;padding-bottom:13em;'>
					<table>
						<tr>
							<td width='90'>Qty Min</td><td width='70'><input type='text' value='' id='QtyMin' name='QtyMin'/ ></td><td> </td>
							<td width='90'>Qty Max</td><td width='70'><input type='text' value='' id='QtyMax' name='QtyMax'/ ></td><td> </td>
							<td width='90'>Add Max</td><td width='70'><input type='text' value=''/ ></td><td> </td>
							<td width='90'>Outs.Order</td><td width='90'><input type='text' value=''/ ></td><td> </td>
						</tr>
						<tr>
							<td width='110'>Stock Awal</td><td width='70'><input type='text' value=''/ ></td><td> </td>
							<td width='90'>Inward</td><td width='70'><input type='text' value=''/ ></td><td> </td>
							<td width='90'>Outward</td><td width='70'><input type='text' value=''/ ></td><td> </td>
							<td width='90'>Stock Akhir</td><td width='70'><input type='text' value=''/ ></td><td> </td>
						</tr>
			             
						<tr>
							<td width='120'>Demand This Year</td><td width='70'><input type='text' value=''/ ></td><td> </td>
							<td width='120'>Demand Last Year</td><td width='70'><input type='text' value=''/ ></td><td> </td>

						</tr>
					</table>
			   </div>
			   </br>
			   History Qty Per Tahun
			    <table border=1 width=70%>
					<tr style='border: #c1cad5 solid 1px;background:#e4e9f0;'>
						<td class='brd'>Tahun</td>
						<td class='brd'>Qty Awal</td>
						<td class='brd'>Qty In</td>
						<td class='brd'>Qty Out</td>
					</tr>
					<tr>
						<td class='brd'>2009</td>
						<td class='brd'></td>
						<td class='brd'></td>
						<td class='brd'></td>
					</tr>
					<tr>
						<td class='brd'>2010</td>
						<td class='brd' ></td>
						<td class='brd'></td>
						<td class='brd'></td>
					</tr>
				</table>
			    </br>
				Harga PO terakhir
				<table border=1 width=70%>
					<tr style='border: #c1cad5 solid 1px;background:#e4e9f0;'>
						<td class='brd'>No.PO</td>
						<td class='brd'>No.LPB</td>
						<td class='brd'>Tgl.PO</td>
						<td class='brd' width='40'>Curr</th>
						<td class='brd' width='110'>Harga Beli</td>
					</tr>
					<tr class='brd'>
						<td>000234668</td>
						<td>LPB000456</td>
						<td>03-03-2014</td>
						<td width='40'>Rp</td>
						<td width='110'>125500</td>
					</tr>
					<tr class='brd'>
						<td>000467943</td>
						<td>LPB000123</td>
						<td>05-03-2014</td>
						<td width='40'>Rp</td>
						<td width='110'>95000</td>
					</tr>
			    </table>
				</br>
                <div class="example-code">
				Daftar Harga
				
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>Tipe Hrg</th>
						<th>Curr.Beli</th>
						<th>Kurs Beli</th>
						<th>Harga Beli</th>
						<th>Margin(%)</th>
						<th>Ongkos kirim</th>
						<th>Ongkos kapal</th>
						<th>Harga Netto</th>
						<th>Curr Jual</th>
						<th>Faktor</th>
						<th>Harga Jual</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
                <!--tampilan admin-->
				<?php
				$st = $this->session->userdata('level');
				if($st=='101'){
				?>
				    <tr style='color:red;'>
						<td>Komputer</td>
						<td>Rp</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>    

						</td>
					</tr>
					<tr>
						<td>Price List</td>
						<td>Rp</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				<?php				
				}
				?>
				<!--tampilan sales-->
				<?php
				$st = $this->session->userdata('level');
				if($st=='102'){
				?>
				    <tr>
                    <td>2</td>
                    <td>xxx</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
				}
				?>
				</tbody>
				</table>
				<button type="button">Simpan</button>
				<input type='Reset' name='Reset' value='Hapus' style='width:60px;'/>
				</form>

			</div>
            </div>
			<!-- tab 1 content -->
			
			<!-- tab 2 content -->
            <div id="justified-tabs-2">
			    Daftar Part Substitusi
				<table border=1 width=55%>
					<thead>
					<tr>
						<th width=20></th>
						<th>Part No Subs</th>
						<th>Nama Part Subs</th>
						<th>PartCode</th>
						<th>Status</th>
					</tr>
					</thead>
				     <tr>
						<td>1</td>
						<td>M 2423A-30551</td>
						<td>ROD END</td>
						<td>TYT</td>
						<td>Aktif</td>
					</tr> 
					<tr>
						<td>2</td>
						<td>K 3EB-24-21310A</td>
						<td>Ball Socket</td>
						<td>TYT</td>
						<td>Aktif</td>
					</tr> 
				</table>
				</br>
				<input type='button' name='Proses' value='Proses' style='width:60px;'/>&nbsp
			    </br> </br>
            <div class="example-code">
				Daftar Harga
				<table class="table table-condensed">
					<thead>
					<tr>
						<th>Tipe Hrg</th>
						<th>Curr.Beli</th>
						<th>Kurs Beli</th>
						<th>Harga Beli</th>
						<th>Margin(%)</th>
						<th>Ongkos kirim</th>
						<th>Ongkos kapal</th>
						<th>Harga Netto</th>
						<th>Curr Jual</th>
						<th>Faktor</th>
						<th>Harga Jual</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
                <!--tampilan admin-->
				<?php
				$st = $this->session->userdata('level');
				if($st=='101'){
				?>
				    <tr style='color:red;'>
						<td>Komputer</td>
						<td>Rp</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>    

						</td>
					</tr>
					<tr>
						<td>Price List</td>
						<td>Rp</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				<?php				
				}
				?>
				<!--tampilan sales-->
				<?php
				$st = $this->session->userdata('level');
				if($st=='102'){
				?>
				    <tr>
                    <td>2</td>
                    <td>xxx</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
				}
				?>
				</tbody>
				</table>
			</div>
			
            </div>
			<!-- tab 2 content -->
			
			<!-- tab 3 content -->
            <div id="justified-tabs-3">
               <div class="example-code">
				Daftar Lokasi Barang
				<table style='border: #c1cad5 solid 1px;width:200px;'>
					<tr style='border: #c1cad5 solid 1px;background:#e4e9f0;'>
						<th style='border: #c1cad5 solid 1px;width:20px;'></th>
						<th style='border: #c1cad5 solid 1px;'>Kode Lokasi</th>
						<th style='border: #c1cad5 solid 1px;width:80px;'>Qty</th>
					</tr>
					<tr style='border: #c1cad5 solid 1px;'>
						<td style='border: #c1cad5 solid 1px;width:20px;'></td>
						<td style='border: #c1cad5 solid 1px;'>SBY</td>
						<td style='border: #c1cad5 solid 1px;width:80px;'>0</td>
					</tr>
					<tr style='border: #c1cad5 solid 1px;'>
						<td style='border: #c1cad5 solid 1px;width:20px;'></td>
						<td style='border: #c1cad5 solid 1px;'>CKRG</td>
						<td style='border: #c1cad5 solid 1px;width:80px;'>0</td>
					</tr>
					<tr style='border: #c1cad5 solid 1px;'>
						<td style='border: #c1cad5 solid 1px;width:20px;'></td>
						<td style='border: #c1cad5 solid 1px;'>Total Qty</td>
						<td style='border: #c1cad5 solid 1px;width:80px;'><input type='text' /></td>
					</tr>
				</table>
            </div>
			 </div>
			<!-- tab 3 content -->
			
			<!-- tab 4 content -->
            <div id="justified-tabs-4">
                tab 4 content
            </div>
			<!-- tab 4 content -->
			

    </div>


 










