	<h3 style="color: white"><span class="glyphicon glyphicon-pencil"></span> Edit Data</h3>
	<p style="color: white">Silahkan Edit Data Pada Form Di Bawah Ini</p>

	<form class="form-group" method="post" action="<?php echo base_url() ; ?>index.php/tarif/update">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Kode Tarif</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="kodetarif" autofocus placeholder="Kode Tarif" value="<?php echo $detail_tarif['kodetarif'] ;?>" readonly >
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Daya</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="daya" placeholder="Daya" value="<?php echo $detail_tarif['daya'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tarif Per KWH</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tarifperkwh" placeholder="Tarif Per KWH" value="<?php echo $detail_tarif['tarifperkwh'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/tarif/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
    </div>
  </div>

	</form>