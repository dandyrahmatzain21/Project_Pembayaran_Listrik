<h3 style="color: white"><span class="glyphicon glyphicon-user"></span> Data Pelanggan</h3>
<p style="color: white">Berikut Adalah Data Pelanggan Yang Tersedia</p>

<a class="btn btn-primary" href="<?php echo base_url();?>index.php/pelanggan/tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>

<p></p>
<div class="table-responsive">
<table style="background-color: white" class="table table-bordered table table-striped">
	<thead>
	<tr>
		<th>No.</th>
		<th>Id Pelanggan</th>
		<th>No Meter</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Kode Tarif</th>
        <th colspan="2">Aksi</th>
	</tr>
	</thead>
	<?php
		if(isset($daftar_pelanggan)){
			$no=null;
			foreach($daftar_pelanggan as $baris_data){
				$no++;
				echo'
				<tr>
				<td>'.$no.'</td>
				<td>'.$baris_data['idpelanggan'].'</td>
				<td>'.$baris_data['nometer'].'</td>
				<td>'.$baris_data['nama'].'</td>
				<td>'.$baris_data['alamat'].'</td>
				<td>'.$baris_data['kodetarif'].'</td>
				<td><a class="btn btn-primary" href="'.site_url('pelanggan/edit/'.$baris_data['idpelanggan']).'"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
				</td>
				<td>
					<a class="btn btn-primary" href="'.site_url('pelanggan/hapus/'.$baris_data['idpelanggan']).'"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
				</td>
				</tr>
				';
			}
		}else{
			echo'Data Pelanggan Masih Kosong';
		}
	?>
</table></div>
<?php
	echo $this->session->flashdata('pesan_crud') ;
?>