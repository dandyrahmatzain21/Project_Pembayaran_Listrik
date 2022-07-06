<h3 style="color: white"><span class="glyphicon glyphicon-plus"></span> Tambah Data</h3>
<p style="color: white">Masukan Data Tagihan Pada Form Di Bawah Ini</p>

<form class="form-group" method="POST" action="<?php echo base_url() ; ?>index.php/tagihan/simpan" OnSubmit="return(CekForm());">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Id Pelanggan</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="idpelanggan" id="idpelanggan" placeholder="Id Pelanggan" autofocus >
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Bulan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="bulan" id="bulan" placeholder="Bulan">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tahun</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Jumlah Meter</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jumlahmeter" id="jumlahmeter" placeholder="Jumlah Meter">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
    </div>
  </div>

</form>

<script> <!-- awal-->

		function CekForm(){
			
			if(document.getElementById('idpelanggan').value==""){
			alert('Id Pelanggan Tidak Boleh Kosong !');
			document.getElementById('idpelanggan').focus();	
			return false;	
			}

			if(document.getElementById('bulan').value==""){
			alert('Bulan Tidak Boleh Kosong !');
			document.getElementById('bulan').focus();	
			return false;	
			}

			if(document.getElementById('tahun').value==""){
			alert('Tahun Tidak Boleh Kosong !');
			document.getElementById('tahun').focus();	
			return false;	
			}

			if(document.getElementById('jumlahmeter').value==""){
			alert('Jumlah Meter Tidak Boleh Kosong !');
			document.getElementById('jumlahmeter').focus();	
			return false;	
			}
		
		return(true);
		
		}

</script> <!-- akhir-->