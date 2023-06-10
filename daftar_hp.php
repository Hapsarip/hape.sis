<?php 
session_start();
include('koneksi.php');
?>

<?php 
	if(isset($_POST["tambah_hp"])){
		$nama      = $_POST["nama"];
		$harga     = $_POST["harga"];
		$ram       = $_POST["ram"];
		$memori    = $_POST["memori"];
		$processor = $_POST["processor"];
		$kamera    = $_POST["kamera"];
		
		$harga_angka = $ram_angka = $memori_angka = $processor_angka = $kamera_angka = 0;

		if($harga < 2000000){
			$harga_angka = 5;
		} 
		elseif($harga >= 2000000 && $harga <= 5000000){
			$harga_angka = 4;
		}
		elseif($harga > 5000000 && $harga <= 10000000){
			$harga_angka = 3;
		}
		elseif($harga > 10000000 && $harga <= 12000000){
			$harga_angka = 2;
		}
		elseif($harga > 15000000){
			$harga_angka = 1;
		}


		if($ram > 12){
			$ram_angka = 5;
		}
		elseif($ram >= 10 && $ram <= 12){
			$ram_angka = 4;
		}
		elseif($ram >= 7 && $ram < 10){
			$ram_angka = 1;
		}
		elseif($ram >= 4 && $ram < 7){
			$ram_angka = 1;
		}
		elseif($ram >= 1 && $ram < 4){
			$ram_angka = 1;
		}


		if($memori == 32){
			$memori_angka = 1;
		}
		elseif($memori == 64){
			$memori_angka = 2;
		}
		elseif($memori == 128){
			$memori_angka = 3;
		}
		elseif($memori == 256){
			$memori_angka = 4;
		}
		elseif($memori == 512){
			$memori_angka = 5;
		}


		if($processor == "Quadcore"){
			$processor_angka = 1;
		}
		elseif($processor == "Octacore"){
			$processor_angka = 3;
		}
		elseif($processor == "Hexacore"){
			$processor_angka = 5;
		}


		if($kamera < 8){
			$kamera_angka = 1;
		}
		elseif($kamera >= 8 && $kamera <= 12){
			$kamera_angka = 2;
		}
		elseif($kamera > 12 && $kamera <= 20){
			$kamera_angka = 3;
		}
		elseif($kamera > 20 && $kamera <= 50){
			$kamera_angka = 4;
		}
		elseif($kamera > 50){
			$kamera_angka = 5;
		}

		$sql = "INSERT INTO `data_hp` (`id_hp`, `nama_hp`, `harga_hp`, `ram_hp`, `memori_hp`, `processor_hp`, `kamera_hp`, `harga_angka`, `ram_angka`, `memori_angka`, `processor_angka`, `kamera_angka`) 
				VALUES (NULL, :nama_hp, :harga_hp, :ram_hp, :memori_hp, :processor_hp, :kamera_hp, :harga_angka, :ram_angka, :memori_angka, :processor_angka, :kamera_angka)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nama_hp', $nama);
		$stmt->bindValue(':harga_hp', $harga);
		$stmt->bindValue(':ram_hp', $ram);
		$stmt->bindValue(':memori_hp', $memori);
		$stmt->bindValue(':processor_hp', $processor);
		$stmt->bindValue(':kamera_hp', $kamera);
		$stmt->bindValue(':harga_angka', $harga_angka);
		$stmt->bindValue(':ram_angka', $ram_angka);
		$stmt->bindValue(':memori_angka', $memori_angka);
		$stmt->bindValue(':processor_angka', $processor_angka);
		$stmt->bindValue(':kamera_angka', $kamera_angka);
		$stmt->execute();
	}

	if(isset($_POST["hapus_hp"])){
		$id_hapus_hp = $_POST['id_hapus_hp'];
		$sql_delete = "DELETE FROM `data_hp` WHERE `id_hp` = :id_hapus_hp";
		$stmt_delete = $db->prepare($sql_delete);
		$stmt_delete->bindValue(':id_hapus_hp', $id_hapus_hp);
		$stmt_delete->execute();
		$query_reorder_id=mysqli_query($selectdb,"ALTER TABLE data_hp AUTO_INCREMENT = 1");
	}
?>

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

	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Import jQuery before materialize.js-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="assets/dataTable/jquery.dataTables.min.css">
	<script type="text/javascript" charset="utf8" src="assets/dataTable/jquery.dataTables.min.js"></script>

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

		<!-- Daftar hp Start -->
	<div style="background-color: #efefef">
		<div class="container">
		    <div class="section-card" style="padding: 40px 0px 20px 0px;">
				<ul>
				    <li>
						<div class="row">
						<div class="card" style="border-radius:10px;">
								<div class="card-content">
									<center><h5 style="margin-bottom: 0px; margin-top: -8px; font-weight:normal;">Daftar HP</h5></center>
									<table id="table_id" class="hover dataTablesCustom" style="width:100%">
											<thead style="border-top: 1px solid #d0d0d0;">
												<tr>
													<th><center>No </center></th>
													<th><center>Nama HP</center></th>
													<th><center>Harga HP</center></th>
													<th><center>RAM HP</center></th>
													<th><center>Memori HP</center></th>
													<th><center>Processor HP</center></th>
													<th><center>Kamera HP</center></th>
													<th><center>Hapus</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												$query=mysqli_query($selectdb,"SELECT * FROM data_hp");
												$no=1;
												while ($data=mysqli_fetch_array($query)) {
												?>
												<tr>
													<td><center><?php echo $no; ?></center></td>
													<td><center><?php echo $data['nama_hp'] ?></center></td>
													<td><center><?php echo "Rp. ", $data['harga_hp'] ?></center></td>
													<td><center><?php echo $data['ram_hp']," GB" ?></center></td>
													<td><center><?php echo $data['memori_hp']," GB" ?></center></td>
													<td><center><?php echo $data['processor_hp'] ?></center></td>
													<td><center><?php echo $data['kamera_hp']," MP" ?></center></td>
													<td>
														<center>
															<form method="POST">
																<input type="hidden" name="id_hapus_hp" value="<?php echo $data['id_hp'] ?>">
																<button type="submit" name="hapus_hp" style="height: 24px; width: 24px;" class="btn-floating btn-small waves-effect waves-light red"><i style="line-height: 24px;" class="material-icons">remove</i></button>
															</form>
														</center>
													</td>
												</tr>
												<?php
														$no++;}
												?>
											</tbody>
									</table>
									</div>
									
							</div>
							<a href="#tambah" class="btn-floating btn-large waves-effect waves-light teal btn-float-custom"><i class="material-icons">add</i></a>
						</div>
				    </li>
				</ul>	     
	    	</div>
		</div>
	</div>
	<!-- Daftar hp End -->

		<!-- Modal Start -->
	<div id="tambah" class="modal" style="width: 40%; height: 100%; border-radius:10px;">
		<div class="modal-content">
			<div class="col s6">
					<div class="card-content">
						<div class="row">
							<center><p style="margin-top:-8px; font-size:20px;">Masukkan Smartphone</p></center>
							<form method="POST" action="">
								<div class = "row">
									<div class="col s12">

										<div class="col s6" style="margin-top: 10px;">
											<b>Nama</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="nama" type="text" required>
										</div>

										<div class="col s6" style="margin-top: 10px;">
											<b>Harga</b>
										</div>
										<div class="col s6">
											<input style="height: 2rem;" name="harga" type="number" required>
										</div>
										
										<div class="col s6" style="margin-top: 10px;">
										<b>RAM</b>
										</div>
										<div class="col s6">
											<select style="display: block; margin-bottom: 4px;" required name="ram">
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
											<select style="display: block; margin-bottom: 4px;" required name="memori">
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
											<select style="display: block; margin-bottom: 4px;" required name="processor">
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
											<select style="display: block; margin-bottom: 4px;" required name="kamera">
												<option value = "" disabled selected>Kriteria Kamera</option>
                                                <option value = "1">< 8 Mp</option>
                                                <option value = "2">8 - 12 Mp</option>
                                                <option value = "3">13 - 20 Mp</option>
                                                <option value = "4">21 - 50 Mp</option>
                                                <option value = "5">> 50 Mp</option>
											</select>
										</div>

									</div>  
								</div> 
								<center><button name="tambah_hp" type="submit" class="waves-effect waves-light btn teal" style="margin-top: 0px;border-radius:18px;">Tambah</button></center>	
							</form>
						</div>
					</div>
				</div>
			</div>
		<div style="height: 0px; "class="modal-footer">
          <a style="margin-top: -20px;" class="modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
        </div>
	</div>
	<!-- Modal End -->

    <!-- Body End -->

    <script type="text/javascript">
	  	$(document).ready(function(){
		$('.parallax').parallax();
		$('.modal').modal();
		$('#table_id').DataTable({
    		"paging": false
		});
	    });
	</script>
</body>
</html>