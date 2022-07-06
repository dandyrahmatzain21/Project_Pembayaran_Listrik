	<h3 style="color: white"><span class="glyphicon glyphicon-pencil"></span> Edit Data</h3><br/>
	<p style="color: white">Silahkan Isi Data Di Bawah Ini Dengan Benar</p>
	<form class="form-group" method="POST" action="<?php echo base_url();?>index.php/pembayaran/update">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Bayar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="idbayar" placeholder="Id Bayar" value="<?php echo $detail_pembayaran['idbayar'] ;?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="idpelanggan" placeholder="Id Pelanggan" value="<?php echo $detail_pembayaran['idpelanggan'] ;?>" readonly>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Bulan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="bulan" placeholder="Bulan" value="<?php echo $detail_pembayaran['bulan'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?php echo $detail_pembayaran['tahun'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tanggal Bayar</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tanggalbayar" placeholder="Tanggal Bayar" value="<?php echo $detail_pembayaran['tanggalbayar'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Biaya Admin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="biayaadmin" placeholder="Biaya Admin" value="<?php echo $detail_pembayaran['biayaadmin'] ;?>">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/pembayaran/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
    </div>
  </div>	
	</form>