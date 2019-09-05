<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-file-plus"></i> Tambah </button>
<?php echo br(2); ?>
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
    <h5 class="panel-title"><i class="icon-collaboration"></i> Akses Admin</h5>
  </div>
  <div class="panel-body">
    <table class="table table-bordered datatable-columns">
        <thead>
         <tr>
             <th>No</th>
             <th>Username</th>
             <th>Password</th>
             <th></th>
             <th>Akses</th>
             <th><center>Opsi</center></th>
         </tr>
       </thead>
       <tbody>
         <?php $no=0; foreach($all as $row): $no++;?>
         <tr>
           <td></td>
           <td><?php echo $row->username; ?></td>
           <td><?php echo $row->password; ?></td>
           <td><?php echo $no; ?></td>
           <td><?php if($row->akses==1){echo 'Super Admin';} else { echo 'Admin';} ?></td>

           <td>
             <center>
               <a data-toggle="modal" data-target="#modal_edit<?=$row->id_admin;?>" class="btn btn-info btn-xs" data-popup="tooltip" data-original-title="Edit Data" data-placement="top"><i class="icon-pencil5"></i></a>
               <a href="<?php echo site_url('User/hapus/'.$row->id_admin); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs tooltips" data-popup="tooltip" data-original-title="Hapus Data" data-placement="top"><i class="icon-x"></i></a>

             </center>
           </td>

         </tr>
       <?php endforeach; ?>
       </tbody>
     </table>
  </div>
  <div id="modal_theme_primary" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('User/add'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h6 class="modal-title"><strong>Tambah Data</strong></h6>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label class='col-md-3'>Username</label>
            <div class='col-md-9'><input type="text" name="username" autocomplete="off" required placeholder="Masukkan Username" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Password</label>
            <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
          </div>
          <br>
          <div class="form-group">
            <label class='col-md-3'>Akses</label>
            <div class='col-md-9'>
              <select data-placeholder="Pilih Akses" name="akses" required class="select-clear">
                <option></option>
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
              </select>
            </div>
          </div>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
    </div>
  </div>
</div>
<?php $no=0; foreach($all as $row): $no++; ?>
<div class="row">
  <div id="modal_edit<?=$row->id_admin;?>" class="modal fade">
    <div class="modal-dialog">
      <form action="<?php echo site_url('User/edit'); ?>" method="post">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h6 class="modal-title"><strong>Edit Data</strong></h6>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label class='col-md-3'>Id Admin</label>
              <div class='col-md-9'><input type="text" name="id_admin" autocomplete="off" value="<?=$row->id_admin;?>" required placeholder="Masukkan Username" class="form-control" ></div>
            </div>
            <br>
            <div class="form-group">
              <label class='col-md-3'>Username</label>
              <div class='col-md-9'><input type="text" name="username" autocomplete="off" value="<?=$row->username;?>" required placeholder="Masukkan Username" class="form-control" ></div>
            </div>
            <br>
            <div class="form-group">
              <label class='col-md-3'>Password</label>
              <div class='col-md-9'><input type="password" name="password" autocomplete="off" required placeholder="Masukkan Password" class="form-control" ></div>
            </div>
            <br>
            <div class="form-group">
              <label class='col-md-3'>Akses</label>
              <div class='col-md-9'>
                <select data-placeholder="Pilih Akses" name="akses" required class="select-clear">
                  <option></option>
                  <option value="1">Super Admin</option>
                  <option value="2">Admin</option>
                </select>
              </div>
            </div>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
      </div>
  </div>
</div>
<?php endforeach; ?>
