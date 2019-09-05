<link href="<?php echo base_url('assets/css/css.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/icons/icomoon/styles.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/minified/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/minified/core.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/minified/components.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/css/minified/colors.min.css'); ?>" rel="stylesheet" type="text/css">

<script type="text/javascript">
  window.print();
</script>
<div class="panel panel-primary">

<h1><center>IDENTITAS KELUARGA BERDASARKAN KARTU KELUARGA</center></h1>



  <div class="panel-body">
    <h3> No KK : <b><i><?=getnamakk($id);?></i></b></h3>
    <p>
      Berdasarkan No KK : <b><i><?=getnamakk($id);?></i></b> terdapat kepala keluarga dan anggota keluarga yaitu :
    </p>
    <table class="table table-bordered datatable-columns">
      <thead>
          <tr>
              <th>No</th>
              <th>Keteterangan</th>
              <th>NIK</th>
              <th>Nama</th>
              <th>JK</th>
              <th>Tanggal Lahir</th>
              <th>Hidup / Meninggal</th>
          </tr>
      </thead>
      <tbody>
          <?php $no=0; foreach($all as $row): $no++; ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td>
                  <center>
                    <?php $num=cekKK($row->nik);
                      if($num>0){
                        echo 'Kepala Keluarga';
                      }else{
                        echo 'Anggota Keluarga';
                      }
                    ?>
                  </center>
                </td>
                <td><?php echo $row->nik; ?></td>
                <td><?php echo $row->nama; ?></td>
                <td><?php echo $row->jk; ?></td>
                <td><?php echo $row->tanggal_lahir; ?></td>
                <td>
                  <?php if($row->status==1){
                    echo " Hidup";
                    $site=site_url('entry/hidup/'.$row->nik);
                    $teks="Nonaktifkan Data";
                    $icon="switch";
                    $class="warning";
                  }elseif($row->status==2){
                    echo "Meninggal";
                    $site=site_url('entry/mati/'.$row->nik);
                    $teks="Aktifkan Data";
                    $icon="switch";
                    $class="default";
                  }?>

                </td>
            </tr>
          <?php endforeach; ?>
      </tbody>
    </table>
    <right><h6> Wali Nagari Taeh Baruah</h6></right>
  </div>
</div>

<script type="text/javascript">
      window.location.href="http://localhost/MgWaliNagori/Entry"
</script>
