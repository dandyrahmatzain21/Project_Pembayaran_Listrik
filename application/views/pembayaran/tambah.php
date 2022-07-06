<h3 style="color: white"><span class="glyphicon glyphicon-plus"></span> Tambah Data</h3><br/>
	<p style="color: white">Silahkan Isi Data Di Bawah Ini Dengan Benar</p>
	<form class="form-group" method="POST" action="<?php echo base_url();?>index.php/pembayaran/simpan" OnSubmit="return(CekForm())">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Bayar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="idbayar" id="idbayar" placeholder="Id Bayar" autofocus>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <select name="idpelanggan" class="form-control">
    <?php
    if(isset($daftar_penggunaan)){
      foreach($daftar_penggunaan as $row){
      echo '<option value="'.$row['idpelanggan'].'">'.$row['idpelanggan'].'</option>';
      }
    }
    ?>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Bulan</label>
    <div class="col-sm-10">
      <select name="bulan" class="form-control">
    <?php
    if(isset($daftar_penggunaan)){
      foreach($daftar_penggunaan as $row){
      echo '<option value="'.$row['bulan'].'">'.$row['bulan'].'</option>';
      }
    }
    ?>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <select name="tahun" class="form-control">
    <?php
    if(isset($daftar_penggunaan)){
      foreach($daftar_penggunaan as $row){
      echo '<option value="'.$row['tahun'].'">'.$row['tahun'].'</option>';
      }
    }
    ?>
    </select>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tanggal Bayar</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="tanggalbayar" id="tanggalbayar" placeholder="Tanggal Bayar">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Biaya Admin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="biayaadmin" id="biayaadmin" placeholder="Biaya Admin">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/pembayaran/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
    </div>
  </div>

	</form>
<script>
		function CekForm(){

			if(document.ElementById('idpelanggan').value==""){
				alert('Id Pelanggan Tidak Boleh Kosong');
				document.ElementById('idpelanggan').focus();
				return true;
			}

			if(document.ElementById('idbayar').value==""){
				alert('Id Bayar Tidak Boleh Kosong');
				document.ElementById('idbayar').focus();
				return true;
			}

			if(document.ElementById('bulan').value==""){
				alert('Bulan Tidak Boleh Kosong');
				document.ElementById('bulan').focus();
				return true;
			}

			if(document.ElementById('tahun').value==""){
				alert('Tahun Tidak Boleh Kosong');
				document.ElementById('tahun').focus();
				return true;
			}

      if(document.ElementById('tanggalbayar').value==""){
        alert('Tanggal Bayar Tidak Boleh Kosong');
        document.ElementById('tanggalbayar').focus();
        return true;
      }

			if(document.ElementById('biayaadmin').value==""){
				alert('Biaya Admin Tidak Boleh Kosong');
				document.ElementById('biayaadmin').focus();
				return true;
			}

			return false;
		}

</script>