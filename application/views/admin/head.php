<style media="screen" type="text/css">


.header-highlight .navbar-header:not([class*=bg-]){
  background-color: #1c7fd6;
}

</style>
<div class="navbar navbar-default navbar-fixed-top header-highlight">
  <div class="navbar-header">
    <a class="navbar-brand" href="<?php echo base_url('Welcome'); ?>"><b style="color:white;font-size:17px;"><i><?php echo getnamains('desa');?></i></b></a>
    <ul class="nav navbar-nav visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
      <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
  </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown dropdown-user">
        <a class="dropdown-toggle" data-toggle="dropdown">
          <span> <i class="icon-collaboration"></i><?php echo getnama($this->session->userdata('id_penduduk')); ?></span> <?php if($this->session->userdata('level')==1){echo "Super Admin";}else{echo "Admin";} ?>
          <i class="caret"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="<?php echo site_url('Welcome/logout'); ?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar');"><i class="icon-switch2"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
