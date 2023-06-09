<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<meta property="og:image" content="assets/image/laptop.jpg" />
	<meta name="description" content="Leppi adalah aplikasi Sistem Pendukung Keputusan Laptop berbasis Metode Weight Product">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<script>
	$(document).ready(function(){
	  $(".button-collapse").sideNav();
	  $(".dropdown-button").dropdown();
	});
	</script>
</head>
<body>
	<div class="navbar-fixed">

	<!-- navbar -->
	<?php
	include 'components/navbar.php'
	?>
	<!-- navbar -->
	
		</div>
    <!-- Body Start -->

		<!-- Jumbotron Start -->
		<div id="index-banner" class="parallax-container">
			<div class="section no-pad-bot">
				<div class="container">
					<h1 class="header jarak center white-text" style="font-size: 40px; font-weight:bold;">SISTEM PENDUKUNG KEPUTUSAN</h1>
					<h1 class="header center white-text" style="font-size: 40px; font-weight:bold;">PEMILIHAN HP</h1>
				
					<div class="row center" \>
								<a href="rekomendasi.php" id="download-button" class="waves-effect waves-light btn-large" style="margin-top: 40px; background-color: #fff; border-radius:25px; color:#000; font-weight:bold;">Cari Rekomendasi</a>
							</div>
				</div>
			</div>
			<div class="parallax"><img src="assets/image/pixel.jpg" alt="Laptop"></div>
		</div>
		<!-- Jumbotron End -->

	<!-- Info Start -->
	<div style="background-color: white;">
		<div class="container">
		    <div class="section-card" style="padding: 36px 0px">
		    	<div class="row">

					<!-- tentang kami -->
					<div class="tentang-kami" style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin-top: 40px; margin-bottom: 60px;">
						<h4 style="font-weight:bold;">Tentang <span style="color:#08A78B;">HAPE.SIS</span></h4>
						<!-- keterangan -->
						<div style="width: 75%; text-align: center; font-size: larger; display: flex; flex-direction:column; justify-content: center; align-items: center;">
							<p><span style="color:#08A78B;">HAPE.SIS</span> adalah sebuah web yang menyediakan <span style="color:#08A78B;"><strong>Sistem Pendukung Keputusan</strong></span> untuk memberikan rekomendasi pembelian handphone</p>
							<p><span style="color:#08A78B;">HAPE.SIS</span> membantu memilih handphone yang sesuai dengan preferensi dan kebutuhanmu</p>
							<p>Metode yang digunakan dalam pengambilan keputusan adalah <span style="color:#08A78B;">TOPSIS</span>. <br>Metode ini mengevaluasi beberapa alternatif terhadap sekumpulan kriteria, dimana setiap atribut tidak saling bergantung satu dengan lainnya. Tahapan dalam metode TOPSIS adalah menentukan kriteria dan alternatif, menentukan matriks penilaian, menormalisasi matriks penilaian, 4. menentukan bobot kriteria, menghitung matriks keputusan terbobot, menentukan solusi ideal positif (SIP) dan solusi ideal negatif (SIN), serta menghitung jarak alternatif</p>
						</div>
					</div>
					<!-- tentang kami -->

					<!-- Cara Penggunaan -->
					<div class="cara-penggunaan" style="display: flex; flex-direction:column; justify-content: center; align-items: center; margin-top: 20px; margin-bottom: 100px;">
						<h4 style="font-weight:bold;">Cara Penggunaan</span></h4>
						<!-- keterangan -->
						<div style="width: 60%; font-size: larger; display: flex; flex-direction:column;">
							<ol class="numbered-list">
								<li style="line-height: 2;">Klik tombol "Cari Rekomendasi"</li>
								<li style="line-height: 2;">Masukkan rentang nilai untuk tiap kriteria handphone yang diinginkan</li>
								<li style="line-height: 2;">Klik tombol "Hitung"</li>
							</ol>
						</div>
					</div>
				
		    	</div>
	    	</div>
		</div>
	</div>
	<!-- Info End -->
	
    <!-- Body End -->

    <script type="text/javascript">
	 			$(document).ready(function(){
	      $('.parallax').parallax();
				$('.modal').modal();
	    });
	</script>
</body>
</html>