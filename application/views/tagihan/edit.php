<h3 style="color: white"><span class="glyphicon glyphicon-pencil"></span> Edit Data</h3>
	<p style="color: white">Silahkan Edit Data Pada Form Di Bawah Ini</p>

	<form class="form-group" method="POST" action="<?php  echo base_url();?>index.php/tagihan/update">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="idpelanggan" placeholder="Id Pelanggan" value="<?php echo $detail_tagihan['idpelanggan'];?>" readonly autofocus >
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Bulan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="bulan" placeholder="Bulan" value="<?php echo $detail_tagihan['bulan'];?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $detail_tagihan['tahun'];?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Jumlah Meter</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jumlahmeter" placeholder="Jumlah Meter" value="<?php echo $detail_tagihan['jumlahmeter'];?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
    </div>
  </div>
		
	</form>