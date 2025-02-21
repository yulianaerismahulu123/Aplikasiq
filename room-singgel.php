<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Detail Kamar</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Type Kamar</th>
							<th>Fasilitas</th>
							<th>Deskripsi</th>
							<th>Price</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from singgel ");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['type_kamar']?></td>
							<td><?php echo $row['fasilitas']?></td>
							<td><?php echo $row['deskripsi']?></td>
							<td><?php echo $row['Price_Permalam']?></td>
							<td><img src="images/sinngel.jpg"</td>

							
                    
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>