
<?php include "header.php";?>

<?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Pemilik wilayah rumah
                    </div>
            <?php

            }

            ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-data-tamu.php" method="POST">
                    <div class="form-group">
                        <label for="Nama_Tamu">Nama Tamu</label>
                        <input type="text" name="Nama_Tamu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Tanggal_Lahir">Tanggal Lahir</label>
                        <input type="date" name="Tanggal_Lahir" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Jenis_Kelamin">Jenis Kelamin</label>
                        <select name="Jenis_Kelamin" class="form-control">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea name="Alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="No_Telpon">No Telpon</label>
                        <input type="number" name="No_Telpon" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="Kirim" class="btn btn-info">
                    <a href="reservasi.php" class="btn btn-success">Next</a>
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>
