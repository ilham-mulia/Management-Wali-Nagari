
<script type="text/javascript" src="<?php echo base_url('assets/js/plugins/visualization/echarts/echarts.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/charts/echarts/bars_tornados.js') ?>"></script>
<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
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

<?php
$koneksi = mysqli_connect('localhost','root','','mgwalinagori');

//agama
$tampilag = mysqli_query($koneksi,"SELECT * FROM agama");
$agama = mysqli_num_rows($tampilag);

//pendidikan
$tampilpd = mysqli_query($koneksi,"SELECT * FROM kategori");
$pendidikan = mysqli_num_rows($tampilpd);

//kartu keluarga
$tampilkk = mysqli_query($koneksi,"SELECT * FROM kk");
$kk= mysqli_num_rows($tampilkk);

//kartu keluarga
$tampilkk = mysqli_query($koneksi,"SELECT * FROM kk");
$kk= mysqli_num_rows($tampilkk);

//kartu Penduduk
$tampilpdd = mysqli_query($koneksi,"SELECT * FROM penduduk");
$pdd= mysqli_num_rows($tampilpdd);

?>


      <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-globe fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$agama"; ?></div>
                                    <div>Data Agama</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('agama') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-mortar-board fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$pendidikan"; ?></div>
                                    <div>Data Pendidikan</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('kategori') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-file-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$kk"; ?></div>
                                    <div>Data Kartu Keluarga</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('entry') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-male fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo "$pdd"; ?></div>
                                    <div>Data Warga/Penduduk</div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url('entry/all') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="row">
                              <center>
                                <div class="col-xs-12">
                                    <i class="fa fa-download fa-5x"></i>
                                </div>
                              </center>
                            </div>
                        </div>
                        <a href="<?php echo base_url('welcome/backup') ?>">
                            <div class="panel-footer">
                                <span class="pull-left">Backup Database</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
