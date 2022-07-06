	<h3 style="color: white"><span class="glyphicon glyphicon-credit-card"></span> Data Pembayaran</h3>
	<p style="color: white">Berikut Adalahn Data Yang Terdapat Pada Data Pembayaran</p>
    <a class="btn btn-primary" href="<?php echo base_url();?>index.php/pembayaran/tambah"><span class="glyphicon glyphicon-usd"></span> Bayar</a><p></p>
	<div class="table-responsive">
		<table style="background-color: white" class="table table-bordered table table-striped">
			<thead>
				<tr>
					<th>No.</th>
					<th>Id Bayar</th>
					<th>Id Pelanggan</th>
					<th>Bulan</th>
					<th>Tahun</th>
					<th>Biaya Admin</th>
					<th>Biaya Admin</th>
				</tr>
			</thead>
			<?php
				if(isset($daftar_pembayaran)){
					$no=null;
					foreach($daftar_pembayaran as $baris_data){
						$no++;
						echo'
						<tr>
							<td>'.$no.'</td>
							<td>'.$baris_data['idbayar'].'</td>
							<td>'.$baris_data['idpelanggan'].'</td>
							<td>'.$baris_data['bulan'].'</td>
							<td>'.$baris_data['tahun'].'</td>
							<td>'.$baris_data['tanggalbayar'].'</td>
							<td>'.$baris_data['biayaadmin'].'</td>							
						</tr>
						';
					}
				}
			?>
		</table>
	</div>