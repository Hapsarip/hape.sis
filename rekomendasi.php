<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pendukung Keputusan Pemilihan Smartphone</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>
	<link rel="stylesheet" href="assets/css/table.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/image/apple-icon.png"> 	<link rel="icon" type="image/png" sizes="96x96" href="assets/image/favicon.png">

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- link to css style -->
    <link rel="stylesheet" type="text/css" rel="noopener" target="_blank" href="rekomendasi.css">
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

		<!-- Daftar Laptop Start -->
        <div style="background-color: #fff">
            <div class="container">
                <div class="section-card" style="padding: 32px 0px 20px 0px">
                    <ul>
                        <li>
                            <div class="row">
                                <div class="col s3">
                                </div>
                                <div class="col s6">      
                                    <div class="card" style="border-radius: 10px;">
                                        <div class="card-content">
                                            <div class="row">
                                                <center><h5 style="font-weight:bold;">Masukkan Kriteria</h5></center>
                                                <br>
                                                <form class = "col s12" method="POST" action="hasil.php">
                                                    <div class = "row">
                                                        <div class="col s12">

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kriteria Harga</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="harga">
                                                                    <option value = "" disabled selected style="color: #eceff1;"><i>Kriteria Harga</i></option>
                                                                    <option value = "5">< Rp. 2.000.000</option>
                                                                    <option value = "4">2.000.000 - 5.000.000</option>
                                                                    <option value = "3">5.000.000 - 10.000.000</option>
                                                                    <option value = "2">10.000.000 - 15.000.000</option>
                                                                    <option value = "1">> 15.000.000</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                            <b>RAM</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="ram">
                                                                    <option value = "" disabled selected>Kriteria RAM</option> 
                                                                    <option value = "1">1 - 3 Gb</option>
                                                                    <option value = "2">4 - 6 Gb</option>
                                                                    <option value = "3">7 - 9 Gb</option>
                                                                    <option value = "4">10 - 12 Gb</option>
                                                                    <option value = "5">> 12 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Memori</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="memori">
                                                                    <option value = "" disabled selected>Kriteria Penyimpanan</option>
                                                                    <option value = "1">32 Gb</option>
                                                                    <option value = "2">64 Gb</option>
                                                                    <option value = "3">128 Gb</option>
                                                                    <option value = "4">256 Gb</option>
                                                                    <option value = "5">512 Gb</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Processor</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="processor">
                                                                    <option value = "" disabled selected>Kriteria Processor</option>
                                                                    <option value = "1">Quadcore</option>
                                                                    <option value = "3">Octacore</option>
                                                                    <option value = "5">Hexacore</option>
                                                                </select>
                                                            </div>

                                                            <div class="col s6" style="margin-top: 10px;">
                                                                <b>Kamera</b>
                                                            </div>
                                                            <div class="col s6">
                                                                <select required name="kamera">
                                                                    <option value = "" disabled selected>Kriteria Kamera</option>
                                                                    <option value = "1">< 8 Mp</option>
                                                                    <option value = "2">8 - 12 Mp</option>
                                                                    <option value = "3">13 - 20 Mp</option>
                                                                    <option value = "4">21 - 50 Mp</option>
                                                                    <option value = "5">> 50 Mp</option>
                                                                </select>
                                                            </div>
                                                            
                                                        </div>  
                                                    <center><button type="submit" class="waves-effect waves-light btn" style="margin-bottom:-46px; border-radius: 25px; background-color: #08A78B; width: 140px;">Hitung</button></center>	
                                                </form>       
                                            </div>
                                        </div>
                                    </div>                    
                                </div>
                                <div class="col s3">
                                </div>
                            </div>
                        </li>
                    </ul>	     
                </div>
            </div>
        </div>
        <!-- Rekomendasi Laptop End -->

    <!-- Body End -->

    <script type="text/javascript">
	  $(document).ready(function(){
	      $('.parallax').parallax();
          $('select').material_select();
          $('.modal').modal();
	    });
    </script>
</body>
</html>