<h3 style="color: white"><span class="glyphicon glyphicon-plus"></span> Tambah Data</h3>
<p style="color: white">Masukan Data Penggunaan Pada Form Di Bawah Ini</p>

<form class="form-group" method="POST" action="<?php echo base_url() ; ?>index.php/penggunaan/simpan" OnSubmit="return(CekForm())">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <select name="idpelanggan" class="form-control">
    <?php
    if(isset($daftar_pelanggan)){
      foreach($daftar_pelanggan as $row){
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
      <select class="form-control"  name="bulan" placeholder="Bulan">
        <option>Pilih Bulan</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <select class="form-control"  name="tahun" placeholder="tahun">
        <option>Pilih Tahun</option>
        <option>2001</option>
        <option>2002</option>
        <option>2003</option>
        <option>2004</option>
        <option>2005</option>
        <option>2006</option>
        <option>2007</option>
        <option>2008</option>
        <option>2009</option>
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Meter Awal</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meterawal" id="meterawal" placeholder="meterawal">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Meter Akhir</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="meterakhir" id="meterakhir" placeholder="meterakhir">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/penggunaan/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
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
		if(document.getElementById('bulan').value==""){
			alert('Bulan Tidak Boleh Kosong!');
			document.getElementById('bulan').focus();
			return
		}

		if(document.getElementById('tahun').value==""){
			alert('Tahun Tidak Boleh Kosong !');
			document.getElementById('tahun').focus();
			return false;
		}

		if(document.getElementById('meterawal').value==""){
			alert('Meter Awal Tidak Boleh Kosong !');
			document.getElementById('meterawal').focus();
			return false;
		}

		if(document.getElementById('meterakhir').value==""){
			alert('Meter Akhir Tidak Boleh Kosong !');
			return false;
		}

		return(true);

	}

</script>