	<h3 style="color: white"><span class="glyphicon glyphicon-pencil"></span> Edit Data</h3>
	<p style="color: white">Silahkan Edit Data Pada Form Di Bawah Ini</p>

	<form class="form-group" method="POST" action="<?php  echo base_url();?>index.php/pelanggan/update">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="idpelanggan" placeholder="Id Pelanggan" value="<?php echo $detail_pelanggan['idpelanggan'] ; ?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">No Meter</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="nometer" placeholder="No Meter"value="<?php echo $detail_pelanggan['nometer'] ; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama" placeholder="Nama"value="<?php echo $detail_pelanggan['nama'] ; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="alamat" placeholder="Alamat"value="<?php echo $detail_pelanggan['alamat'] ; ?>">
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