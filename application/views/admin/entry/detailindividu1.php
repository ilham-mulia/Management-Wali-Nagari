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

  <div class="panel-body">
    <div class="col-md-12">
      <table class="table table-bordered">
          <tr>
              <th width="180">NIK</th>
              <td><?php echo $getrow['nik']; ?></td>
          </tr>
          <tr>
              <th>Nama</th>
              <td><?php echo $getrow['nama']; ?></td>
          </tr>
          <tr>
              <th>Tempat Lahir</th>
              <td><?php echo $getrow['tempat_lahir']; ?></td>
          </tr>
           <tr>
              <th>Tanggal Lahir</th>
              <td><?php echo $getrow['tanggal_lahir']; ?></td>
          </tr>
           <tr>
              <th>Jenis Kelamin</th>
              <td><?php echo $getrow['jk']; ?></td>
          </tr>
          <tr>
              <th>Golongan Darah</th>
              <td><?php echo $getrow['golongan_darah']; ?></td>
          </tr>
          <tr>
              <th width="180">Alamat</th>
              <td><?php echo $getrow['alamat']; ?></td>
          </tr>
          <tr>
              <th>Pekerjaan</th>
              <td><?php echo $getrow['pekerjaan']; ?></td>
          </tr>
          <tr>
              <th>Kewarganegaraan</th>
              <td><?php echo $getrow['kewarganegaraan']; ?></td>
          </tr>
           <tr>
              <th>Agama</th>
              <td><?php echo getnamaagama($getrow['id_agama']); ?></td>
          </tr>
          <tr>
              <th>Kategori / Pendidikan</th>
              <td><?php echo $getrow['id_kategori']; ?></td>
          </tr>
           <tr>
              <th>Foto</th>
              <td><img src="<?php echo base_url('uploads/'.$getrow['foto']); ?>" alt="Belum Di Update" class='img4' width="120px"></td>
          </tr>
      </table>
    </div>
  </div>
</div>
<br>

<script type="text/javascript">
      window.location.href="http://localhost/MgWaliNagori/Entry/all"
</script>
