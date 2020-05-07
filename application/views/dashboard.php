<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
	<title>VMS-1.0</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
</head>
<body>
<div class="container">
	<div class="box">
			<a href="<?php echo base_url();?>Capture/aksi">
		<div class="content">
			<img src="arrow.png"></a>
			<p style="color: white;">Visitor Management</p>
		</div>
	</div>
	<div class="box">
		<div class="content">
			<a href="<?php echo base_url();?>Validasi">
		<img src="3.jpg" ></a>
			<p style="color: white;">Validasi Visitor</p>
		</div>
	</div>
	<div class="box">
		<div class="content">
			</div>
	</div>
	<div class="box">
		<div class="content">
			</div>
	</div>
	<div class="box">
		<div class="content">
		 <h1 style="color: white" class="line anim-typewriter">V.1.0.0</h1>
			</div>
	</div>
	<div class="box">
		<div class="content">
			<b><p style="color: white">
			<script type='text/javascript'>

var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];

var date = new Date();

var day = date.getDate();

var month = date.getMonth();

var thisDay = date.getDay(),

    thisDay = myDays[thisDay];

var yy = date.getYear();

var year = (yy < 1000) ? yy + 1900 : yy;
document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);

</script>
</p></b>
 
		</div>
	</div>
	<div class="box">
		<div class="content">
<script type="text/javascript">
    window.setTimeout("waktu()",1000);
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }
</script>
</head>

<style>
    #jam-digital{overflow:hidden; width:350px}
    #hours{float:left; width:90px; height:50px; background-color:#ffff}
    #minute{float:left; width:90px; height:50px; background-color:#ffff}
    #second{float:left; width:90px; height:50px; background-color:#ffff}
    #jam-digital p{color:#000; font-size:36px; text-align:center; margin-top:4px}
</style>

<body onLoad="waktu()">
    <div id="jam-digital">
        <div id="hours"><p class="text-center" id="jam">:</p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div>
</table>
				</div>
	</div>
</div>

</body>
</html>