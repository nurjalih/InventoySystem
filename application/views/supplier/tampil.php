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

	.input-read-only {
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
	
<h3>
    Supplier
</h3>
        <div class="button-group dropdown" style='margin:0 0 0 72em;padding-bottom:3px;'>
            <a href="javascript:;" class="btn medium primary-bg" title="">
                <span class="button-content">Add New</span>
            </a>
            <a href="javascript:;" class="btn medium primary-bg" data-toggle="dropdown">
                <span class="glyph-icon icon-separator float-right">
                    <i class="glyph-icon icon-angle-down"></i>
                </span>
            </a>
            <ul class="dropdown-menu float-right">
                <li>
					<div id="container1">
						<h1 class='tambah'>Tambah - Master Supplier</h1>
							<div id="body">
								<?php echo form_open('supplier'); ?>
								<table width="" cellpadding="3" cellspacing="0">
									<tr><td width="100">Kode Barang</td><td>:</td><td><input type="text" name="kode_barang" value="" class="input-read-only" size="5" readonly="true"></td></tr>
									<tr><td>Nama Barang</td><td>:</td><td><input type="text" name="nama_barang" value="" class="input-read-only" size="50"></td></tr>
									<tr><td>Stok Barang</td><td>:</td><td><input type="text" name="stok" value="" class="input-read-only" size="50"></td></tr>
									<tr><td>Harga Barang</td><td>:</td><td><input type="text" name="harga_barang" value="" class="input-read-only" size="50"></td></tr>
									<tr valign="top"><td>Keterangan</td><td>:</td><td><textarea name="keterangan" class="input-read-only" cols="52" rows="4"></textarea></td></tr>
									<tr valign="top"><td></td><td colspan="2">&nbsp <input type="submit" class="btn-kirim-login" value="Save"></td></tr>
								</table>
								<input type="hidden" name="stts" value="">
								<?php echo form_close(); ?>
							</div>
					</div>
                </li>
            </ul>
        </div>


    <div class="example-code">

        <table class="table table-condensed">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Kontak Person</th>
                    <th>Jabatan</th>
                    <th>Telp</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="font-bold text-left">John Clark</td>
                    <td><a href="javascript:;">Sales</a></td>
                    <td><div class="label bg-orange">+152</div></td>
                    <td>
 
                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td class="font-bold text-left">Kenny Davis</td>
                    <td><a href="javascript:;">Development</a></td>
                    <td><div class="label bg-black">+152</div></td>
                    <td>
           
                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td class="font-bold text-left">David Robertson</td>
                    <td><a href="javascript:;">Support</a></td>
                    <td><div class="label bg-green">+191</div></td>
                    <td>

                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="font-bold text-left">John Doe</td>
                    <td><a href="javascript:;">Testing</a></td>
                    <td><div class="label bg-red">+483</div></td>
                    <td>
        
                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="font-bold text-left">Sofia Williams</td>
                    <td><a href="javascript:;">IT</a></td>
                    <td><div class="label bg-azure">+381</div></td>
                    <td>
   
                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td width=20>6</td>
                    <td class="font-bold text-left">Katy Lewis</td>
                    <td><a href="javascript:;">Business</a></td>
                    <td><div class="label bg-blue-alt">+354</div></td>
                    <td width=50>
     
                        <a href="javascript:;" class="btn small bg-blue-alt tooltip-button" data-placement="top" title="Edit">
                            <i class="glyph-icon icon-edit"></i>
                        </a>
                        <a href="javascript:;" class="btn small bg-red tooltip-button" data-placement="top" title="Remove">
                            <i class="glyph-icon icon-remove"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
    
