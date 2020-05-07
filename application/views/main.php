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
			var username = $('#username').val();
			var kontak = $('#kontak').val();
			var email = $('#email').val();
			var bertemu_dengan = $('#bertemu_dengan').val();
			
			Webcam.snap( function(data_uri) {
				image = data_uri;
			});
			$.ajax({
				url: '<?php echo site_url("capture/save");?>',
				type: 'POST',
				dataType: 'json',
				data: {username: username, kontak: kontak, email: email, bertemu_dengan: bertemu_dengan, image:image},
			})
			.done(function(data) {
				if (data > 0) {
					alert('insert data sukses');
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