<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<title>Survei Kepuasan Pengunjung Lapas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<style>
    body {
   background-image: linear-gradient(to bottom right, blue, #663399);
   /*background-color: blue;*/
   background-repeat: no-repeat;
   background-size:cover
}
</style>
<body>
    
<div class="container">
	<div class="row">
		<div class="header">
			<h2 style="color:white">PENILAIAN KEPUASAN PENGUNJUNG LAPAS KELAS I SURABAYA</h2>
			<img src="<?php echo base_url() ?>assets/img/logo_kumham.png" width="70px" alt="Logo"/>
		</div>
	</div>
	
	<!--content is here :)-->
	<?php echo $content; ?><br><br><br><br><br>
	<hr/>
	<div class="footer">
		<h4 style="color:white">Penilaian Kepuasan Pengunjung
Lapas Kelas I Surabaya&copy; 2021</h4><br/>
	</div>
</div>
</body>
</html>