
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/echarts/echarts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/charts/echarts/bars_tornados.js') ?>"></script>

<?php
$data=$this->session->flashdata('sukses');
if($data!=""){ ?>
<div class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
<?php } ?>
<?php
$data2=$this->session->flashdata('error');
if($data2!=""){ ?>
<div class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
<?php } ?>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h5 class="panel-title"><i class="icon-collaboration"></i> Ubah Password</h5>
  </div>
  <div class="panel-body">

          <form action="<?php echo site_url('Welcome/update'); ?>" method="post">


            <div class="modal-body">
              <div class="form-group">
                <label class='col-md-3'>Username</label>
                <div class='col-md-9'><input type="text" name="username" placeholder="Masukkan Username" class="form-control" ></div>
              </div>
              <br>
              <?php
              $pend=$this->session->userdata('id_penduduk');
              $qu=$this->db->query("select * from admin where id_penduduk='$pend'")->row_array(); ?>
              <input type="hidden" name="passlama" value="<?php echo $qu['password']; ?>">
              <input type="hidden" name="userlama" value="<?php echo $qu['username']; ?>">
              <div class="form-group">
                <label class='col-md-3'>Password Lama</label>
                <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
              </div>
              <br>
              <div class="form-group">
                <label class='col-md-3'>Password Baru</label>
                <div class='col-md-9'><input type="password" name="password_baru" autocomplete="off" required placeholder="Masukkan Password Baru" class="form-control" ></div>
              </div>
              <br>
              <div class="form-group">
                <label class='col-md-3'>Konfirmasi Password Baru</label>
                <div class='col-md-9'><input type="password" name="konf_baru" autocomplete="off" required placeholder="Masukkan Konfirmasi Password Baru" class="form-control" ></div>
              </div>
              <br>
            </div>
              <div class="modal-footer">

                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>



  </div>
</div>
