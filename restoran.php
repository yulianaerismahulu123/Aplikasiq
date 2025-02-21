<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Daftar Menu</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama</th>
							<th>Deskripsi</th>
							<th>Category</th>
							<th></th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from restoran ");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['Nama']?></td>
							<td><?php echo $row['Deskripsi']?></td>
							<td><?php echo $row['Category']?></td>
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