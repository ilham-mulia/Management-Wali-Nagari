<style media="screen" type="text/css">



.sidebar{
    background-color: #2081ce;
    color: #fff;
}
.navigation>li.active>a, .navigation>li.active>a:hover, .navigation>li.active>a:focus{
  background-color: #215e8e;
    color: #fff;
}
</style>

<div class="sidebar sidebar-main sidebar-fixed">
  <div class="sidebar-content">
    <div class="sidebar-user">
    </div>
    <div class="sidebar-category sidebar-category-visible">
      <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
          <li class="<?php echo menuaktif('dashboard',$aktif); ?>"><a href="<?php echo base_url('Welcome'); ?>"><i class="icon-home2"></i>  <span>Dashboard</span></a></li>
          <li>
            <a href="#"><i class="icon-stack2"></i> <span>Informasi Keluarga</span></a>
            <ul>
              <li class="<?php echo menuaktif('entry',$aktif); ?>"><a href="<?php echo site_url('Entry'); ?>"><i class="icon-pencil7"></i> <span>Data Kartu Keluarga</span></a></li>
              <li class="<?php echo menuaktif('all',$aktif); ?>"><a href="<?php echo site_url('Entry/all'); ?>"><i class="icon-eye"></i> <span>Semua Data Keluarga</span></a></li>
            </ul>
          </li>
          <li class="<?php echo menuaktif('pas',$aktif); ?>"><a href="<?php echo site_url('Password'); ?>"><i class="icon-collaboration"></i>  <span>Ubah Password</span></a></li>
          <li class="<?php echo menuaktif('about',$aktif); ?>"><a href="<?php echo base_url('About'); ?>"><i class="icon-city"></i>  <span>Tentang Desa</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
