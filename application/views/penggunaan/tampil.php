        <h3 style="color: white"><span class="glyphicon glyphicon-stats"></span> Data Penggunaan</h3>
        <p style="color: white">Berikut Adalah Data Penggunaan Yang Tersedia</p><p></p>
        	<a class="btn btn-primary" href="<?php echo base_url();?>index.php/penggunaan/tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
        	<p></p>
            <div class="table-responsive">
            <table style="background-color: white" class="table table-bordered table table-striped">
                        <thead>
                          <tr>
                          	<th>No.</th>
                            <th>Id Pelanggan</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Meter Awal</th>
                            <th>Meter Akhir</th>
                            <th colspan="2">Aksi</th>
                          </tr>
                        </thead>
        <?php
        	if(isset($daftar_penggunaan)){
        		$no=null;
        		foreach ($daftar_penggunaan as $baris_data) {
        			$no++;
        			echo'
        				<tr>
        				<td>'.$no.'</td>
        				<td>'.$baris_data['idpelanggan'].'</td>
        				<td>'.$baris_data['bulan'].'</td>
        				<td>'.$baris_data['tahun'].'</td>
                        <td>'.$baris_data['meterawal'].'</td>
                        <td>'.$baris_data['meterakhir'].'</td>
        				<td>
        					<a class="btn btn-primary" href="'.site_url('penggunaan/edit/'.$baris_data['idpelanggan']).'"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                            <td>
        					<a class="btn btn-primary" href="'.site_url('penggunaan/hapus/'.$baris_data['idpelanggan']).'"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
        				</td>
        				</tr>
        			';
        		}
        	}else{
        		echo'Data Tarif Kosong';
        	}
        ?>
                      </table>
                      </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>