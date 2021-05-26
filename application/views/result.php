
<br><br>    
    <div class="row">
		<div class="col-md-12 col-sm-12">
			<center>
				<a href="<?php echo base_url(); ?>" class="btn btn-info">Survei</a>  <a href="<?php echo base_url('web/result'); ?>" class="btn btn-info">Hasil</a>
			</center>
			<br/>
		</div>
	</div>
<br>	
<div class="row konten">
	<div class="col-md-12 col-sm-12">
		<div id="chartContainer" style="height: 300px; width: 100%; color: #A52A2A;"></div>
	</div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/chart/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Result Hari Ini?",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y} Survei",
			showInLegend: true,
			indexLabel: "#percent%", 
			dataPoints: [
				{  y: <?php echo $sangat_puas; ?>, name: "Sangat Puas", legendMarkerType: "triangle"},
				{  y: <?php echo $puas; ?>, name: "Puas", legendMarkerType: "circle"},
				{  y: <?php echo $tidak_puas; ?>, name: "Tidak Puas", legendMarkerType: "square"},
				{  y: <?php echo $sangat_tidak_puas; ?>, name: "Sangat Tidak Puas", legendMarkerType: "square"},
			]
		}
		]
	});
	chart.render();
}
</script>
<br><br><br>

			<h3 class="text-center" style="color:white">Jumlah Seluruh Penilaian</h3>
			<br>
                <div class="row">
                    <!-- Column -->
					<?php
					$sp = $this->db->query("SELECT * FROM data WHERE respon = 1")->num_rows();
					?>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card border-primary">
                            <div class=" bg-primary text-center">
								<br>
                                <h3 class="card-title"><?= $sp ?></h3>
                                <h6 class="card-text">Sangat Puas</h6>
								<br>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					<?php
					$p = $this->db->query("SELECT * FROM data WHERE respon = 2")->num_rows();
					?>
					<div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card border-info">
                            <div class=" bg-info text-center">
								<br>
                                <h3 class="card-title"><?= $p ?></h3>
                                <h6 class="card-text">Puas</h6>
								<br>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					<?php
					$tp = $this->db->query("SELECT * FROM data WHERE respon = 3")->num_rows();
					?>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card border-warning">
                            <div class=" bg-warning text-center">
								<br>
                                <h3 class="card-title"><?= $tp ?></h3>
                                <h6 class="card-text">Tidak Puas</h6>
								<br>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
					<?php
					$stp = $this->db->query("SELECT * FROM data WHERE respon = 4")->num_rows();
					?>
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card border-danger">
                            <div class=" bg-danger text-center">
								<br>
                                <h3 class="card-title"><?= $stp ?></h3>
                                <h6 class="card-text">Sangat Tidak Puas</h6>
								<br>
                            </div>
                        </div>
                    </div>
                </div>

     <br><br><br>
	 <h3 class="text-center" style="color:white">Report Survey Kepuasan Pelayanan</h3>
	 <br>
	 <div class="jumbotron" style="background-color: white;">
      <table class="table is-narrow" id="tabeluser">
        <thead>
        <tr>
          <th>No</th>
          <th>Sangat Puas</th>
          <th>Puas</th>
          <th>Tidak Puas</th>
          <th>Sangat Tidak Puas</th>
		  <th>Tanggal</th>
		  <th>Bulan</th>
		  <th>Tahun</th>
        </tr>
        </thead>
        <tbody>
		
       <?php
	   $bulan = array (1 =>   'Januari',
						'Februari',
						'Maret',
						'April',
						'Mei',
						'Juni',
						'Juli',
						'Agustus',
						'September',
						'Oktober',
						'November',
						'Desember'
				);
	   $no = 1;
	   foreach ($count as $row) { ?>
          <tr>
          <td><?= $no++; ?></td>
          <td><?= $row['sangat_puas']; ?></td>
          <td><?= $row['puas']; ?></td>
          <td><?= $row['tidak_puas']; ?></td>
          <td><?= $row['sangat_tidak_puas']; ?></td>
          <td><?= $row['tanggal']; ?></td>
          <td><?= $bulan[$row['bulan']]; ?></td>
          <td><?= $row['tahun']; ?></td>
          </tr>
       <?php } ?>

        </tbody>
      </table>
     </div>
	</div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#tabeluser').DataTable();
  });
  </script>