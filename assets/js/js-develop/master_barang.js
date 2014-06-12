$(function(){
	
	function CariPartNo(){
		var PartNo = $("#PartNo").val();
		var stringt = "PartNo="+PartNo;
		$.ajax({
			type	: 'POST',
			url		: "<?php echo site_url(); ?>/barang/caridata",
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
			url		: "<?php echo site_url(); ?>/barang/carigroup",
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
			url		: "<?php echo site_url(); ?>/barang/caripartcode",
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
			url		: "<?php echo site_url(); ?>/barang/caristatus",
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
			url		: "<?php echo site_url(); ?>/barang/caritipe",
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
	
	$("#part-no").keypress(function(e){
		var id = $(this).val();
		if(e.keyCode == 13){
			if(id == ""){
				$(this).focus();
			} else {
				CariPartNo();
			}
		}
		
	})
})
