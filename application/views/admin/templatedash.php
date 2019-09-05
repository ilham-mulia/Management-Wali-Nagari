<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
  <link href="<?php echo base_url('assets/css/css.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/icons/icomoon/styles.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/minified/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/minified/core.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/minified/components.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url('assets/css/minified/colors.min.css'); ?>" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/pace.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/jquery.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/core/libraries/bootstrap.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/plugins/loaders/blockui.min.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/pages/components_modals.js');?>"></script>
  <!-- /core JS files -->
<script type="text/javascript" src="<?php echo base_url('assets/js/core/app.js'); ?>"></script>
<style>
   .img4{
     width:50px;
     height:60px;
    transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -webkit-transition: all 0.5s;
    }


    .panel-primary>.panel-heading{
    color: #333;
    background-color: #eee;
    border-color: #ddd;
    border: 1px solid #ddd;
  }

</style>
</head>

<body class="navbar-top">
  <?php include "head.php"; ?>
  <div class="page-container">
    <div class="page-content">
      <?php include $menu; ?>
      <div class="content-wrapper">
        <div class="page-header">

        </div>
        <br>
        <div class="content">
          <?php include $content; ?>
        </div>

    </div>
  </div>
</body>
</html>
