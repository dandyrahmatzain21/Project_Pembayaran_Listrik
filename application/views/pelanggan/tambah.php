	<h3 style="color: white"><span class="glyphicon glyphicon-plus"></span> Tambah Data</h3>
	<p style="color: white">Masukan Data Pelanggan Pada Form Di Bawah Ini</p>

	<form class="form-group" method="POST" action="<?php echo base_url();?>index.php/pelanggan/simpan" OnSubmit="return(CekForm());">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="idpelanggan" id="idpelanggan" placeholder="Id Pelanggan" autofocus >
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">No Meter</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nometer" id="nometer" placeholder="No Meter">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Kode Tarif</label>
    <div class="col-sm-10">
     <select name="kodetarif" class="form-control">
    <?php
    if(isset($daftar_tarif)){
      foreach($daftar_tarif as $row){
      echo '<option value="'.$row['kodetarif'].'">'.$row['kodetarif'].'</option>';
      }
    }
    ?>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/pelanggan/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
    </div>
  </div>
  	</form>

	<script>
		
		function CekForm(){

			if(document.getElementById('idpelanggan').value==""){
				alert('Id Pelanggan Tidak Boleh Kosong !');
				document.getElementById('idpelanggan').focus();
				return false;
			}

			if(document.getElementById('nometer').value==""){
				alert('No Meter Tidak Boleh Kosong !');
				document.getElementById('nometer').focus();
				return false;
			}

			if(document.getElementById('nama').value==""){
				alert('Nama Tidak Boleh Kosong !');
				document.getElementById('nama').focus();
				return false;
			}

			if(document.getElementById('alamat').value==""){
				alert('Alamat Tidak Boleh Kosong !');
				document.getElementById('alamat').focus();
				return false;
			}

			if(document.getElementById('kodetarif').value==""){
				alert('Kode Tarif Tidak Boleh Kosong !');
				document.getElementById('kodetarif');
				return false;
			}

		}

	</script>