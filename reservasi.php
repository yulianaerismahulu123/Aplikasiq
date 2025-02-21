<?php include "header.php"; ?>

<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Booking</h2>


				<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Pemesanan Berhasil , Cek Email Anda!
									</div>
					<?php

					}

					?>

				
					<form action="proses-reservasi.php" method="post">
						<table class="table table-hover">


							<tr>
								<td>Id_Tamu
								<input type="number" name="Id_Tamu" class="form-control input-md" placeholder="" required>
								</td>
							</tr>
							<tr>

								<td>Nama Reservasi
								<input type="text" name="Nama_Tamu" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Tgl Check In
								<input type="date" name="Tgl_Check_In" class="form-control input-md" placeholder="Isikan Tanggal Check In" required>
								</td>
							</tr>
							<tr>
								<td>Tgl Check Out
								<input type="date" name="Tgl_Check_Out" class="form-control input-md" placeholder="Isikan Tanggal Check Out" required>
								</td>
							</tr>
							<tr>
								<td>Type Kamar
                                <select name="Type_Kamar" class="form-control">
                                <option value="Presidential Room">Presidential Room</option>
                                <option value="Standart Room">Standart Room</option>
                                 <option value="Singel Room">Singel Room</option>
                                  <option value="Delux Room">Delux Room</option>
                                   <option value="Junior Suite Room">Junior Suite Room</option>
                                    <option value="Family Room">Family Room</option>
                               </select>
                               </div>
								</td>
							</tr>
							<tr>
								<td>Price Permalam
								<label for="Price_Permalam" class="form-label"></label>
                                <select name="Price_Permalam" class="form-control pilihan" required>
								<option value="">-- Pilih Harga--</option>
	                            <option value="Rp.2.000.000">Rp.2.000.000 - Presidential Room</option>
	                            <option value="Rp.1.500.000">Rp.1.500.000 - Delux Room</option>
	                            <option value="Rp.1.250.000">Rp.1.250.000- Junior Suite Room</option>
	                            <option value="Rp.1.000.000">Rp.1.000.000 - Singel Room</option>
	                            <option value="Rp.1.200.000">Rp.1.200.000- Family Room</option>
	                            <option value="Rp.1.100.000">Rp.1.100.000- Standart Room</option>
								</td>
							</tr>
							<tr>
								<td>Lama Inap
								<input type="number" name="Lama_Inap" class="form-control input-md" placeholder="" required>
								</td>
							</tr>
							   <tr>
								<td>Total Bayar
								<input type="text" name="Total_Bayar" class="form-control input-md" placeholder="" required>
								</td>
							</tr>
							<tr>
								<td>Metode Bayar
								<select name="Metode_Bayar" class="form-control">
                                <option value="Cash">Cash</option>
                                <option value="Debit">Debit</option>
                                 <option value="Kredit">Kredit</option>
                                  </select>
                               </div>
								</td>
							</tr>
							<tr>
								
								<td>
								<input type="submit" value="Kirim" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>

      <script>
    document.addEventListener('DOMContentLoaded', function () {
        const itemPrices = {
            Presidential Room: 2000000,
            Delux Room: 1500000,
            Junior Suite Room: 1250000,
            Singel Room: 1000000,
            Family Room: 1200000,
            Standart Room: 1100000,
            
        };
        function updateTotal_Bayar() {
            const selectedItem = document.querySelector('select[name="Price_Permalam"]').value;
            const lamaInap = parseInt(document.querySelector('input[name="Lama_Inap"]').value) || 0;

            
            const hargaKamar= itemPrices[selectedItem] || 0;

            const Total_Bayar= (hargaKamar * lamaInap) ;

            
            document.getElementById('Total_Bayar').value = Rp.${Total_Bayar};
        }

        document.querySelector('select[name="Price_Permalam"]').addEventListener('change',updateTotal_Bayar);
        document.querySelector('input[name="Lama_Inap"]').addEventListener('input', updateTotal_Bayar);
    });
</script> 

		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		
<?php include "footer.php"; ?>