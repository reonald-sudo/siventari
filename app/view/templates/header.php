<?php require_once('../app/config/config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= BASEURL2; ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- SWEET ALERT 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.0/chart.min.js" integrity="sha512-qKyIokLnyh6oSnWsc5h21uwMAQtljqMZZT17CIMXuCQNIfFSFF4tJdMOaJHL9fQdJUANid6OB6DRR0zdHrbWAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- select 2 -->
    <link href="<?= BASEURL2; ?>/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?= BASEURL2; ?>/plugins/select2/css/select2.css" rel="stylesheet">


</head>

<body>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">