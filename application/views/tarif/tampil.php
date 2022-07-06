<h3 style="color: white"><span class="glyphicon glyphicon-usd"></span> Data Tarif</h3>

        <p style="color: white">Berikut Adalah Data Tarif Yang Tersedia</p><p></p>
            <a class="btn btn-primary" href="<?php echo base_url();?>index.php/tarif/tambah"><span class="glyphicon glyphicon-plus"></span> Tambah Data</a>
            <p></p>
            <div class="table-responsive">
            <table style="background-color: white" class="table table-bordered table table-striped">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Kode Tarif</th>
                            <th>Daya</th>
                            <th>Tarif Per KWH</th>
                            <th colspan="2">Aksi</th>
                          </tr>
                        </thead>
        <?php
            if(isset($daftar_tarif)){
                $no=null;
                foreach ($daftar_tarif as $baris_data) {
                    $no++;
                    echo'
                        <tr>
                        <td>'.$no.'</td>
                        <td>'.$baris_data['kodetarif'].'</td>
                        <td>'.$baris_data['daya'].'</td>
                        <td>'.$baris_data['tarifperkwh'].'</td>
                        <td>
                            <a class="btn btn-primary" href="'.site_url('tarif/edit/'.$baris_data['kodetarif']).'"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td><td>
                            <a class="btn btn-primary" href="'.site_url('tarif/hapus/'.$baris_data['kodetarif']).'"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
                        </td>
                        </tr>
                    ';
                }
            }else{
                echo'Data Tarif Kosong';
            }
        ?>
                      </table>

                      </div>

    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>