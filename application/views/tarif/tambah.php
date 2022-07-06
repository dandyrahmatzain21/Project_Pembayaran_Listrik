<h3 style="color: white"><span class="glyphicon glyphicon-plus"></span> Tambah Data</h3>
<p style="color: white">Masukan Data Tarif Pada Form Di Bawah Ini</p>

<form class="form-group" method="POST" action="<?php echo base_url() ; ?>index.php/tarif/simpan" OnSubmit="return(CekForm());">

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Kode Tarif</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="kodetarif" id="kodetarif" autofocus placeholder="Kode Tarif" >
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Daya</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="daya" id="daya" placeholder="Daya">
    </div>
  </div>

  <div class="form-group row">
    <label style="color: white" class="col-sm-2 col-form-label">Tarif Per KWH</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tarifperkwh" id="tarifperkwh" placeholder="Tarif Per KWH">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/tarif/tampil"><span class="glyphicon glyphicon-repeat"></span> Kembali</a>
    </div>
  </div>

</form>

<script> <!-- awal-->

		function CekForm(){
			
			if(document.getElementById('kodetarif').value==""){
			alert('Kode Tarif Tidak Boleh Kosong !');
			document.getElementById('kodetarif').focus();	
			return false;	
			}

			if(document.getElementById('daya').value==""){
			alert('Daya Tidak Boleh Kosong !');
			document.getElementById('daya').focus();	
			return false;	
			}

			if(document.getElementById('tarifperkwh').value==""){
			alert('Tarif Per KWH Tidak Boleh Kosong !');
			document.getElementById('tarifperkwh').focus();	
			return false;	
			}
		
		return(true);
		
		}

</script> <!-- akhir-->