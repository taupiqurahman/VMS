
<!DOCTYPE html>
<html>
<head>
	<title>Oy diem-diem bae</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-16 ">
				<br>
					<a href="<?php echo base_url();?>Capture"><= Kembali</a>
				<div class="text-center">
				<div class="col-sm-17">
					<div class="panel panel-danger">
<div class="panel-heading"><h4 class="box-title"><p class="text-center text-danger"><b>VISITOR MANAGEMENT SYSTEM <br><br>(V.1.0.0)</p></b></h2>
</div>
</div>
			</div>
		</div>
				<hr>
				<form id="register">
					<div class="box-body">
<div class="form-group">
<div class="row">
						<div class="col-lg-3">
						<label for="">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" required>
						
					</div>
				
					<div class="col-lg-3">
						<label for="">Kontak</label>
						<input type="text" class="form-control" name="kontak" id="kontak" required>
					</div>
					
					<div class="col-lg-3">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" id="email" required >
					</div>

					<div class="col-lg-3">
						<label for="">Alamat</label>
						<input type="alamat" class="form-control" name="alamat" id="alamat" required >
					</div>

					 <div class="col-lg-3">
                    	<label class="control-label">Pilih ID Card</label>
                    	<select style="height:35px" class="form-control" name="id_card" type="text"
                     	id="id_card" required>
                    	<option value="">Pilih</option>
                    	<option value="KTP">KTP</option>
                    	<option value="SIM">SIM</option>
                    	<option value="PASPOR">PASPOR</option>
                  		</select>
                	</div>
                	
					<div class="col-lg-3">
						<label for="">Nomer Identitas</label>
						<input type="number" class="form-control" name="nomer_id" id="nomer_id" required >
					</div>
    
					 <div class="col-lg-3">
                    	<label class="control-label">Bertemu dengan : </label>
                    	<select style="height:35px" class="form-control" name="bertemu_dengan" type="text"
                     	id="bertemu_dengan" required>
                    	<option value="">Pilih</option>
                    	<option value="Bapak Budi">Bapak Budi</option>
                    	<option value="Ibu Arin">Ibu Arin</option>
                  		</select>
                	</div>

                	<div class="col-lg-3">
                    	<label class="control-label">Keperluan : </label>
                    	<select style="height:35px" class="form-control" name="Keperluan" type="text"
                     	id="keperluan" required>
                    	<option value="">Pilih</option>
                    	<option value="kunjungan">Kunjungan</option>
                    	<option value="dinas">Dinas</option>
                  		</select>
                	</div>
                	</div>
                <br>
					<div id="my_camera" class="col-sm-19">

					</div>
					<br>
					<div class="col-sm-19">
					<button input type=button class="tampil btn btn-info" class="col-sm-10" onClick="previewasing()"><span class="glyphicon glyphicon-camera"></span> Take Foto</button>
					<button input type=button class="tampil btn btn-info" onClick="batalasing()"><span class="glyphicon glyphicon-camera"></span> Take Foto Ulang</button>
					</div>
					<br>
					<hr>
					<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
	<script language="JavaScript">
		Webcam.set({
			width: 320,
			height: 240,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
	</script>
	<!-- Code to handle taking the snapshot and displaying it locally -->
	<script type="text/javascript">
		$('#register').on('submit', function (event) {
			event.preventDefault();
			var image = '';
			var nama_lengkap = $('#nama_lengkap').val();
			var kontak = $('#kontak').val();
			var email = $('#email').val();
			var alamat = $('#alamat').val();
			var id_card = $('#id_card').val();
			var nomer_id = $('#nomer_id').val();
			var bertemu_dengan = $('#bertemu_dengan').val();
			var keperluan = $('#keperluan').val();
			
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo site_url("capture/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {nama_lengkap: nama_lengkap, kontak: kontak, email: email, alamat: alamat, id_card: id_card, nomer_id: nomer_id, bertemu_dengan: bertemu_dengan, keperluan: keperluan, image:image},
			})
			.done(function(data) {
				if (data > 0) {
					alert('insert data sukses');
					window.location.href='<?php echo base_url();?>Capture/qrcode';
					$('#register')[0].reset();
				}
			})
			.fail(function() {
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
			
		});
		 function previewasing() {
            // untuk preview gambar sebelum di upload
            Webcam.freeze();
            // ganti display webcam menjadi none dan simpan menjadi terlihat
            document.getElementById('webcamasing').style.display = 'none';
        }
        function batalasing() {
            // batal preview
            Webcam.unfreeze();
            
            // ganti display webcam dan simpan seperti semula
            document.getElementById('webcamasing').style.display = '';
        }
        
        
	</script>
</body>
</html>