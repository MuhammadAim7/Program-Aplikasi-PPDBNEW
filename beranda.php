
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
         <title>PPDBM ONLINE | <?= $setting['nama_sekolah'] ?></title>
		 <!-- META DISKRIPSI-->
		<meta name="description" content="Mari bergabung Bersama Kami di <?= $setting['nama_sekolah'] ?>, Pendaftaran Peserta didik Baru Madrasah Tahun <?= date('Y') ?> Kembali dibuka ">
		<meta name="keywords" content="Zulaikah Setia Dewi - STMIK AKI PATI"/>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Vendor -->
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        
        <link href="https://anbk.kemdikbud.go.id/vendor/chart/Chart.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/modules/izitoast/css/iziToast.min.css">
        
        <link href="https://anbk.kemdikbud.go.id/assets/css/front.min.css" rel="stylesheet" />
        <link rel="shortcut icon" href="<?= $setting['logo'] ?>" />
		
		 <link rel="stylesheet" href="assets/css/1.css">
		 <link rel="stylesheet" href="assets/css/2.css">
		 <link rel="stylesheet" href="assets/css/3.css">
        
		 <link rel="stylesheet" href="assets/css/components2.css">
		
		
		
      <link rel="stylesheet" href="assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
	<!--WAKTU JALAN-->
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/front/vendor/countdowntime/flipclock.css">
	<link rel="stylesheet" type="text/css" href="assets/front/css/main.css">
	<!--===============================================================================================-->
    
    
    <!-- Start GA -->
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-94034622-3');
    </script>
	 <?php
	$akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
	$awal = new DateTime(); // Waktu sekarang atau akhir
	$diff  = $awal->diff($akhir);

	?>
    </head>
    
    <body data-spy="scroll" data-target="#menu" data-offset="100">
        <div class="home-wrapper" id="home">
            <div class="home-header">
                <div class="container p-0">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar-header">
                        <a class="navbar-brand" href="javascript:;">
                            <img src="<?= $setting['logo'] ?>" height="75" />
                            <div class="home-header-text d-none d-sm-block">
                                <h5>PENERIMAAN PESERTA DIDIK BARU MADRASAH</h5>
                                <h3><?= $setting['nama_sekolah'] ?></h3>
                                <h6>Tahun Pelajaran 2025 - 2026 </h6>
                            </div>
                            <span class="logo-mini-anbk d-block d-sm-none">PPDBM </span>
                            <span class="logo-mini-tahun d-block d-sm-none">_ONLINE</span>
                        </a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#home" id="link-home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#sekolah" id="link-sekolah">Tentang Sekolah</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tentang" id="link-tentang">Daftar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#Cara-Daftar" id="link-Cara-Daftar">Cara Daftar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#persyaratan" id="link-persyaratan">Info Pendaftaran</a>
                                </li>
								
                                
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
 <?php if ($akhir <= $awal) { ?>		
            <div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        
						<div class="col-sm-8">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                   
                                    
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div>
                                            <h1 data-animation="animated fadeInDownBig">
                                                Selamat Datang Di web PPDBM Online
                                            </h1>
                                            <br />
                                            <p data-animation="animated slideInRight" data-delay="1s">
                                            <h3 Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2024/2025 <?= $setting['nama_sekolah'] ?>.<br />
                                            </p>
                                            <p data-animation="animated slideInRight" data-delay="2s">
                                                Pendaftaran Siswa dan Siswi Baru Tahun Pelajaran 2024/2025 ini telah dibuka. 
                                                </p>
                                                <p data-animation="animated slideInRight" data-delay="3s">Silahkan Segera Daftar dan lengkapi Formulir
                                            </p>
                                            <p data-animation="animated flipInX" data-delay="3s">
                                                <a href="/#tentang" class="btn btn-warning nav-link">
                                                    Lihat Alur Pendaftaran
                                                    <span class="fa fa-chevron-down"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h3 data-animation="animated fadeInDownBig">
                                                Syarat Pendaftaran Peserta Didik Baru Madrasah
                                            </h3>
                                            <h3 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran 2024/2025
                                            </h3>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">1. Mengisi Formulir Pendaftaran






                                                    Surat Keterangan Lulus
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    2. Pas Photo 3x4 2 Lembar
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    3. FC Akta Kelahiran dan KK
                                                </li>
                                               <li data-animation="animated flipInX" data-delay="4s">
                                                    4. SKHUS / FC Raport Kelas 9
                                                </li>
                                                 <li data-animation="animated flipInX" data-delay="5s">
                                                   5. FC Piagam Bagi Siswa Berprestasi
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="6s">
                                                   6. FC PIP/PKH Bagi Yang Memiliki
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div>
                                            <h3 data-animation="animated fadeInDownBig">
                                                Alur Pendaftaran Peserta Didik Baru
                                            </h3>
                                            <h3 data-animation="animated fadeInDownBig">
                                                Tahun Pelajaran 2024/2025
                                            </h3>
                                            <ul>
                                                <li data-animation="animated fadeInDownBig" data-delay="1s">
                                                    Isi Formulir Pendaftaran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="2s">
                                                    Lengkapi Formulir dengan login / hubungi live chat untuk bantuan
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="3s">
                                                    Download Bukti Pendaftaran
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="4s">
                                                    DAFTAR ULANG
                                                </li>
                                                <li data-animation="animated flipInX" data-delay="5s">
                                                    MASUK SEKOLAH
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                    
                                    
                                </div>
                            </div>
							
                        </div>
                        <div class="col-sm-4">
						
                            <div class="card card-login bg-info">
							
                                <div class="card-body">
								<img src="<?= $setting['logo_ppdb'] ?>" alt=""  width="100%">
									<br>
                                   <form id="form-login">
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                           <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="username" placeholder="Masukkan NISN" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                           <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-block btn-login" id="btnsimpan">
                                            Masuk
                                        </button>
										 
										  
                                    </form>
									<br>
                                    <a href="#tentang" class="btn btn-primary btn-block btn-login">
                                                    Daftar Disini</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    

            
            <div class="home-content">
                <section id="sekolah">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                        <div id="carouselExample1" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active"  align="center">
      <img src="assets/ts/2.jpg" align="center" width="600" style="max-width: 90%" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item"  align="center">
      <img src="assets/ts/4.jpg" align="center" width="600" style="max-width: 90%" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                            </div>
                        <div class="col-sm-6">
                        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active"  align="center">
      <img src="assets/ts/1.jpg" align="center" width="600" style="max-width: 90%" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item"  align="center">
      <img src="assets/ts/3.jpg" align="center" width="600" style="max-width: 90%" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            <div class="home-content" >
                <section id="tentang" >
                    <div class="container">
                        <div class="row" style="margin-top: -135px;">
                            <div class="col-sm-6 d-flex align-items-center">
							<div class="col-md-12 animated bounceInLeft">
								<?php if ($setting['jenjang'] == 1) { ?>
								<div class="card">
									<div class="card-header bg-info">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form id="form-daftar">
										<div class="card-body">
											<input type="date" name="tgl_daftar" class="form-control datepicker" value="<?= $daftar['tgl_daftar'] ?>"hidden >
											<div class="form-row">
												<label for="asal">NAMA MADRASAH</label>
													<select class="form-control select2" style="width: 100%" name="jurusan" id="jurusan" >
														<option value=""></option>
														<?php $qu = mysqli_query($koneksi, "select * from jurusan where id='1'");
														while ($jur = mysqli_fetch_array($qu)) {
														?>
															<option value="<?= $jur['id_jurusan'] ?>"> <?= $jur['nama_jurusan'] ?></option>
														<?php } ?>

													</select>
											</div>

											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
													<option value="2">Pindahan</option>
												</select>
												</div>
												<input type="hidden" class="form-control datepicker" name="tgl_daftar" required>
												<div class="form-group col-md-6">
													<label for="nisn">NISN* Sebagai Username Anda</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required>
												</div>
											</div>

											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control datepicker" name="tgllahir" required>
												</div>

											</div>
											<div class="form-group">
												<label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
												<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>

											<img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
											 </div>
												<div class="form-group col-md-6">
													<input class="form-control" type="text" name="kodepengaman" placeholder="masukan kode" required>
												</div>
										   
											 </div>
										</div>
										<div class="card-header bg-white">
											<button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">DAFTAR</button>
										</div>
									</form>
								</div>
								<?php } else { ?>
								<div class="card">
									<div class="card-header bg-info">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form id="form-daftar2">
										<div class="card-body">
											<input type="date" name="tgl_daftar" class="form-control datepicker" value="<?= $daftar['tgl_daftar'] ?>"hidden >
                                            <div class="form-row">
												<label for="asal">NAMA MADRASAH</label>
													<select class="form-control select2" style="width: 100%" name="jurusan" id="jurusan" >
														<option value=""></option>
														<?php $qu = mysqli_query($koneksi, "select * from jurusan");
														while ($jur = mysqli_fetch_array($qu)) {
														?>
															<option value="<?= $jur['id_jurusan'] ?>"> <?= $jur['nama_jurusan'] ?></option>
														<?php } ?>

													</select>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
													<option value="2">Pindahan</option>
												</select>
												</div>
												<div class="form-group col-md-6">
													<label for="nisn">NISN* Sebagai Username Anda</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" required>
												</div>
											</div>

											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" required>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" required>
											</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" required>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control datepicker" name="tgllahir" required>
												</div>

											</div>
											<div class="form-group">
												<label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
												<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>

											<img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
											 </div>
												<div class="form-group col-md-6">
													<input class="form-control" type="text" name="kodepengaman" placeholder="masukan kode" required>
												</div>
										   
											 </div>
										</div>
										<div class="card-footer">
											<button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">SIMPAN DATA</button>
										</div>
									</form>
								</div>
								<?php } ?>
							</div>
                            </div>
							<div class="col-sm-6">
							
                               <p align="center">
                                    <img src="assets/alur.jpg" align="center" width="600" style="max-width: 100%" />
                                </p>
										
                            </div>
                        </div>
                    </div>
                </section>

                
								<?php } ?>
 <?php if ($awal <= $akhir) { ?>

				<div class="home-banner">
                <div class="home-banner-bg home-banner-bg-color"></div>
                <div class="home-banner-bg home-banner-bg-img"></div>
                <div class="container mt-5">
                    <div class="row">
                        
						<div class="col-sm-8">
						
						
                                    <div class="carousel-item active">
                                        <div>
                                            <h5 data-animation="animated fadeInDownBig">
                                                Selamat Datang Di web PPDBM Online
                                            </h5>
                                            <br />
                                            <p data-animation="animated slideInRight" data-delay="1s">
                                                Aplikasi Penerimaan Peserta didik baru Tahun Pelajaran 2024/2025 <?= $setting['nama_sekolah'] ?>.
                                            </p>
                                            <p data-animation="animated slideInRight" data-delay="2s">
                                                Pendaftaran Siswa dan Siswi Baru Tahun 2024/2025 ini Belum Dibuka.
                                            </p>
                                            <p data-animation="animated flipInX" data-delay="3s">
                                                <a href="" class="btn btn-success nav-link">
                                                    Pendaftaran Dibuka Dalam
                                                    <span class="fa fa-chevron-down"></span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
							<center><div class="cd100"></div></center>
						
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-login bg-info">
                                <div class="card-body">
                                    <div class="avatar bg-info" align="center">
										<img src="<?= $setting['logo_ppdb'] ?>" alt="" height="70%" width="70%">
									</div>
									<br>
                                   <form id="form-login">
                                        <div class="form-group">
                                            <span class="fa fa-user"></span>
                                           <input type="text" onkeyup="this.value = this.value.toUpperCase()" class="form-control" name="username" placeholder="Masukkan NISN" required autocomplete="off"disabled>
                                        </div>
                                        <div class="form-group">
                                            <span class="fa fa-key"></span>
                                           <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password"disabled>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary btn-block btn-login" id="btnsimpan">
                                            Masuk
                                        </button>
										 
										  
                                    </form>
									<br>
                                    <a href="#tentang" class="btn btn-primary btn-block btn-login">
                                                    Daftar Disini</a>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-content">
                <section id="tentang">
                    <div class="container">
                        
                        <div class="row">
                            
                            <div class="col-sm-6 d-flex align-items-center">
							<div class="col-md-12 animated bounceInLeft">
								<div class="card">
									<div class="card-header bg-info">
										<h4>Formulir Pendaftaran</h4>
									</div>
									<form id="form-daftar">
										<div class="card-body">
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="jenis">JENIS PENDAFTARAN</label>
													<select class="form-control" name="jenis" id="jenis">
													<option value="1">Siswa Baru</option>
													<option value="2">Pindahan</option>
												</select>
												</div>
												<div class="form-group col-md-6">
													<label for="nisn">NISN* Sebagai Username Anda</label>
													<input type="number" maxlength="10" class="form-control" name="nisn" placeholder="NISN" autocomplete="off" disabled>
												</div>
											</div>

											<div class="form-row">
											<div class="form-group col-md-6">
												<label for="nama">NAMA LENGKAP*</label>
												<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autocomplete="off" disabled>
											</div>
											<div class="form-group col-md-6">
												<label for="nohp">NO HANDPHONE</label>
												<input type="number" class="form-control" name="nohp" placeholder="No HP Whatsapp" disabled>
											</div>
											</div>
											
											<div class="form-row">
												<div class="form-group col-md-6">
													<label for="tempat">TEMPAT LAHIR</label>
													<input type="text" class="form-control" name="tempat" disabled>
												</div>
												<div class="form-group col-md-6">
													<label for="tgllahir">TANGGAL LAHIR</label>
													<input type="date" class="form-control datepicker" name="tgllahir" disabled>
												</div>

											</div>
											<div class="form-group">
												<label for="inputPassword4">PASSWORD (Mohon Diingat!)</label>
												<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" disabled>
											</div>
											<div class="form-row">
											<div class="form-group col-md-6">
											<a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">Refresh Kode</a>

											<img class="p-b-5" id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" style="height:70px" /><br>
											 </div>
												<div class="form-group col-md-6">
													<input class="form-control" type="text" name="kodepengaman" placeholder="masukan kode" disabled>
												</div>
										   
											 </div>
										</div>
										<div class="card-footer">
											<button id='btnsimpan' type="submit" class="btn btn-lg btn-primary">SIMPAN DATA</button>
										</div>
									</form>
								</div>
							</div>
                            </div>
							<br>
							<div class="col-sm-6">
                               <p align="center">
                                    <img src="assets/alur.png" align="center" width="600" style="max-width: 90%" />
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
<?php } ?>
                <section class="bg-light Cara Daftar" id="Cara-Daftar">
                   
                </section>
                 <section class="bg-light Cara Daftar" id="persyaratan">
                    <div class="container">
                        <h5 class="text-center">Info Pendaftaran </h5>
                        <h6 class="text-center">Peserta Didik Baru <?= $setting['nama_sekolah'] ?> Tahun 2024/2025</h6>
                        <div class="row mt-12">
                            <div class="col-sm-6">
                                <div class="card mt-2">
                                    <div class="card-header bg-primary">Cara Daftar</div>
                                    <div class="card-body">
									 <div class="col-12 animated bounceIn">
								
                                    <div class="card">
                                        
                                    </div>


										<div style="text-align: center;"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="170" src="https://www.youtube.com/embed/lM9MXPZ_4A8" title="PPDB MA NU Hasyim Asy'ari 2 Kudus" width="300"></iframe></div>
									</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card mt-2">
                                    <div class="card-header bg-secondary">Pengumuman</div>
                                    <div class="card-body">
                                      <div class="row">
										<div class="col-12 animated bounceIn">
											<div class="card">
												
												<div class="card-body">
													<div class="activities">
														<?php $query = mysqli_query($koneksi, "SELECT * FROM pengumuman where jenis='2'");
														while ($data = mysqli_fetch_array($query)) {
														?>
															<div class="activity">
																<div class="activity-icon bg-primary text-white shadow-primary">
																	<i class="fas fa-bullhorn"></i>
																</div>
																<div class="activity-detail">
																	<div class="mb-2">
																		<span class="text-job text-primary"><?= $data['tgl'] ?></span>
																		<span class="bullet"></span>
																		<a class="text-job" href="https://www.manuhasyimasyari2kudus.sch.id/">Website Utama</a>

																	</div>
																	<h5><?= $data['judul'] ?></h5>
																	<p><?= $data['pengumuman'] ?></p>
																</div>
															</div>
														<?php } ?>

													</div>
												</div>
											</div>
										</div>
									</div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				
				
				
				


				
				
				
            </div>
			
			
			
            
        </div>
        <script>
            var baseURL = '/';
            var uniqueID = 'd8ac8098665d68759eeda768373bb6c2';
            var chartData = JSON.parse('[{"title":"SMK","data":[91.61,7.81,0.58]},{"title":"MA","data":[88.33,11.07,0.6]},{"title":"SMA","data":[89.69,8.33,1.98]},{"title":"SMP","data":[59.15,24.1,16.75]},{"title":"MTs","data":[79.46,19.25,1.29]},{"title":"Nasional","data":[74.84,17.31,7.85]}]');
            var chartLabel = JSON.parse('["Mandiri","Sekolah Lain","UNKP"]');
        </script>
		
        <!-- Vendor -->
        <script src="https://anbk.kemdikbud.go.id/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="https://anbk.kemdikbud.go.id/vendor/jquery/jquery.form.min.js"></script>
        <script src="https://anbk.kemdikbud.go.id/vendor/bootstrap-4/js/bootstrap.min.js"></script>
        <script src="https://anbk.kemdikbud.go.id/vendor/bootstrap-4/js/popper.min.js"></script>
        <script src="https://anbk.kemdikbud.go.id/vendor/wow/js/wow.min.js"></script>
        <script src="https://anbk.kemdikbud.go.id/vendor/chart/Chart.min.js"></script>
           
        <!-- Assets -->
        <script src="https://anbk.kemdikbud.go.id/assets/js/front.min.js"></script>
        <!-- Assets -->
       
		    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
		<script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
		
		 <script src="assets/modules/popper.js"></script>
    <script src="assets/modules/tooltip.js"></script>
    <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="assets/modules/moment.min.js"></script>
    <script src="assets/js/stisla.js"></script>
    <!-- JS Libraies -->
    <script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/modules/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <!-- JS DATATABLE -->
    <script src="assets/modules/datatables/datatables.min.js"></script>
    <script src="assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <script src="assets/js/custom.js"></script>
    </body>
</html>
<script type="text/javascript">
        $('.loader').fadeOut('slow');
        $(document).ready(function() {
            $('.klikmenu').click(function() {
                var menu = $(this).data('id');
                if (menu == "beranda") {
                    $('#btndaftar').show();
                    $('#isi_load').load('home.php');
                } else if (menu == "pendaftaran") {
                    $('#btndaftar').hide();
                    $('#isi_load').load('pendaftaran.php');
                } else if (menu == "daftar") {
                    $('#isi_load').load('datadaftar.php');
				} else if (menu == "siswa") {
                    $('#isi_load').load('siswa.php');
                } else if (menu == "pengumuman") {
                    $('#isi_load').load('pengumuman.php');
                } else if (menu == "login") {
                    $('#isi_load').load('login.php');
                }
            });
            // halaman yang di load default pertama kali
            $('#isi_load').load('home.php');
        });
    </script>
<script>
    $('#form-login').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=login',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Login Berhasil',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.href = "user";
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-daftar').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<script>
    $('#form-daftar2').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'crud_web.php?pg=simpan2',
            data: $(this).serialize(),
            beforeSend: function() {
                $('#btnsimpan').prop('disabled', true);
            },
            success: function(data) {
                var json = $.parseJSON(data);
                $('#btnsimpan').prop('disabled', false);
                if (json.pesan == 'ok') {
                    iziToast.success({
                        title: 'Mantap!',
                        message: 'Data berhasil disimpan',
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        $('#home').load('konfirmasi.php?id=' + json.id + '&nisn=' + json.nisn + '&pass=' + json.pass + '&nama=' + json.nama);
                    }, 2000);

                } else {
                    iziToast.error({
                        title: 'Maaf!',
                        message: json.pesan,
                        position: 'topCenter'
                    });
                    document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random();

                }
                //$('#bodyreset').load(location.href + ' #bodyreset');
            }
        });
        return false;
    });
    if (jQuery().daterangepicker) {
        if ($(".datepicker").length) {
            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                singleDatePicker: true,
            });
        }
        if ($(".datetimepicker").length) {
            $('.datetimepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD hh:mm'
                },
                singleDatePicker: true,
                timePicker: true,
                timePicker24Hour: true,
            });
        }
        if ($(".daterange").length) {
            $('.daterange').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD'
                },
                drops: 'down',
                opens: 'right'
            });
        }
    }
    if (jQuery().select2) {
        $(".select2").select2();
    }
</script>
<!--WAKTU JALAN-->
	<script src="assets/front/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/front/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/front/vendor/countdowntime/flipclock.min.js"></script>
	<script src="assets/front/vendor/countdowntime/moment.min.js"></script>
	<script src="assets/front/vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="assets/front/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="assets/front/vendor/countdowntime/countdowntime.js"></script>
	
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeMonth: <?= $diff->m ?>,
			endtimeDate: <?= $diff->d ?>,
			endtimeHours: <?= $diff->h ?>,
			endtimeMinutes: <?= $diff->i ?>,
			endtimeSeconds: <?= $diff->s ?>,
			timeZone: ""
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
