
<!DOCTYPE html>
<html>
<head>
	<title>Oy diem-diem bae</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<div class="align-content-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ">
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
				</div>
					</div>
		
		<div class="col-md-12 ">	
		<p class="text-center">Silahkan capture atau cetak qrcode dibawah ini :</p>
		<?php foreach ($get_all_visitor as $k): ?>   
		<div class="text-center">                 
        <td><a href="<?= base_url('assets/images/').$k->qr_code ?>"><img width="300px"  src="<?= base_url('assets/images/').$k->qr_code ?> "></a></td>
        </div>
        <b><p class="text-center">*Tunjukkan qrcode anda pada petugas</p></b>
        <p class="text-center">- Terima Kasih -</p>
		<?php endforeach ?>
		</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>