<div class="row notif">
	<div class="col-md-12 col-sm-12">
		<div class="alert alert-danger">
			<h3 style="margin:0;">Terimakasih atas partisipasinya :)</h3>
		</div>
	</div>
</div>
<br><br>
    <div class="row">
		<div class="col-md-12 col-sm-12">
			<center>
				<a href="https://lapassurabaya.com/" class="btn btn-info">Kembali ke Halaman Awal</a>
			</center>
			<br/>
		</div>
	</div>
<div class="row konten">
    <br><br>
	<h4 class="text-center" style="color:white">Bagaimana penilaian anda terhadap layanan kami?</h4><hr>
		<div class="col-sm-12 col-md-3">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(1);"><img
						src="<?php echo base_url() ?>assets/img/sangatpuas.png" width="150" alt="Sangat Puas"></a>
				<div class="caption">
					<h4>Sangat Puas</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(2);"><img
						src="<?php echo base_url() ?>assets/img/sangat_puas.png" width="150" alt="Puas"></a>
				<div class="caption">
					<h4>Puas</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(3);"><img
						src="<?php echo base_url() ?>assets/img/tidakpuas.png" width="150" alt="Tidak Puas"></a>
				<div class="caption">
					<h4>Tidak Puas</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-12 col-md-3">
			<div class="thumbnail">
				<a href="javascript:void();" onclick="get(4);"><img
						src="<?php echo base_url() ?>assets/img/tidakpuass.png" width="150" alt="Sangat Tidak Puas"></a>
				<div class="caption">
					<h4>Sangat Tidak Puas</h4>
				</div>
			</div>
		</div>
	</div>


<script>
	function get(c) {
		$.ajax({
			url: '<?php echo base_url(); ?>proses/AddSurvei',
			type: 'post',
			data: {
				get: c
			},
			success: function () {
				$(".notif").show();
				$(".notif").fadeOut(10000);
			}
		});
	}
</script>