<h3 style="color: white"><span class="glyphicon glyphicon-inbox"></span> Data Tagihan</h3>
<p style="color: white">Berikut Adalah Data Tagihan Yang Tersedia</p>

<p></p>
<div class="table-responsive">
<table style="background-color: white" class="table table-bordered table table-striped">
	<thead>
	<tr>
		<th>No.</th>
		<th>Id Pelanggan</th>
		<th>Bulan</th>
		<th>Tahun</th>
		<th>Jumlah Meter</th>
		<th>Status</th>
	</tr>
	</thead>
	<?php
		if(isset($daftar_tagihan)){
			$no=null;
			foreach($daftar_tagihan as $baris_data){
				$no++;
				echo'
				<tr>
				<td>'.$no.'</td>
				<td>'.$baris_data['idpelanggan'].'</td>
				<td>'.$baris_data['bulan'].'</td>
				<td>'.$baris_data['tahun'].'</td>
				<td>'.$baris_data['jumlahmeter'].'</td>
				<td>'.$baris_data['status'].'</td>
				</tr>
				';
			}
		}else{
			echo'Data Pelanggan Masih Kosong';
		}
	?>
</table>
</div>
<?php
	echo $this->session->flashdata('pesan_crud') ;
?>