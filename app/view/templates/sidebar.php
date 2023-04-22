<?php

require_once('../app/config/config.php');

$username = $_SESSION['username'];

?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?= BASEURL2; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIVENTARI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <?php
            if ($_SESSION['hak_akses'] == 'admin') {
            ?>
                <div class="image">
                    <img src="<?= BASEURL2; ?>/dist/img/wahyu.jpeg" class="img-circle elevation-2" alt="User Image">
                </div>
            <?php
            } elseif ($_SESSION['hak_akses'] == 'kadinas') {
            ?>
                <div class="image">
                    <img src="<?= BASEURL2; ?>/dist/img/IBU.png" class="img-circle elevation-2" alt="User Image">
                </div>
            <?php
            } else {
            ?>
                <div class="image">
                    <img src="<?= BASEURL2; ?>/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
            <?php
            }
            ?>
            <div class="info">
                <a href="#" class="d-block"><?= $username; ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php
                if ($_SESSION['hak_akses'] == 'admin') {
                ?>



                    <!-- HOME -->
                    <li class="nav">
                        <a href="<?= BASEURL; ?>/Home" class="nav-link active">
                            <i class="nav-icon fa fa-home"></i>
                            <p>
                                Home
                                <i class=""></i>
                            </p>
                        </a>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">ASET BARANG PERIPHERAL</li>

                    <!-- MENU A -->
                    <li class="nav-item">
                        <style>
                            .fa-folder {
                                color: #A6BB8D;
                            }

                            .fa-archive {
                                color: #A6BB8D;
                            }

                            .maroon {
                                color: #EE6983;
                            }

                            .tosca {
                                color: #91D8E4;
                            }

                            .kuning {
                                color: #FFD56F;
                            }
                        </style>
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-folder"></i>
                            <p>
                                Inventaris Barang
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/DashboardInventaris" class="nav-link">
                                    <i class="fas fa-clipboard nav-icon "></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <ul class="nested" style="color: #fff;">
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/BarangPengajuan" class="nav-link">
                                        <i class="fa fa-file nav-icon "></i>
                                        <p>Barang Pengajuan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/BarangMasuk" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Barang Masuk</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/BarangDiPerbaiki" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Barang Di Perbaiki</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/BarangRusak" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Barang Rusak</p>
                                    </a>
                                </li>
                            </ul>

                        </ul>
                    </li>
                    <!-- MENU B -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-folder"></i>
                            <p>
                                Inventaris Ruangan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Dashboard" class="nav-link">
                                    <i class="fas fa-clipboard nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>

                            <ul class="nested" style="color: #fff;">
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/KepalaDinas" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang Kadinas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/Sekertaris" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang Sekertaris</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/Kasubag" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang Kasubag</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/Kabid" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang Kabid</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/Office" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang Office</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= BASEURL; ?>/It" class="nav-link">
                                        <i class="fa fa-file nav-icon"></i>
                                        <p>Ruang IT</p>
                                    </a>
                                </li>
                            </ul>
                        </ul>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">DISTRIBUTOR & SERVICE CENTER</li>

                    <!-- MENU C -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder tosca"></i>
                            <p>
                                Distributor
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Distributor" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Distributor</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- MENU D -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder tosca"></i>
                            <p>
                                Service Center
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/ServiceCenter" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Service Center</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">PENGGUNA</li>

                    <!-- MENU E -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Pengguna
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Pengguna" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Pengguna</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php
                } elseif ($_SESSION['hak_akses'] == 'kadinas') {
                ?>
                    <!-- PEMBATAS -->
                    <li class="nav-header">PENGESAHAN</li>

                    <!-- PENGESAHAN -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Pengesahan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Pengesahan Pengajuan</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">LAPORAN BERKALA</li>

                    <!-- MENU E -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Laporan Inventaris
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan/Pengajuan" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Pengajuan</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan/BarangMasuk" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Barang Masuk</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan/DiPerbaiki" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Barang DiPerbaiki</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kadinas_PengesahanPengajuan/Rusak" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Rusak</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">LAPORAN BERKALA RUANGAN</li>

                    <!-- MENU E -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Laporan Ruangan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/Kadinas" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang Kadinas</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/Sekertaris" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang Sekertaris</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/Kasubag" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang Kasubag</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/Kabid" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang Kabid</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/Office" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang Office</p>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/It" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Ruang IT</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                <?php
                } elseif ($_SESSION['hak_akses'] == 'kasubag') {
                ?>
                    <!-- PEMBATAS -->
                    <li class="nav-header">PENGESAHAN</li>

                    <!-- PENGESAHAN -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Pengesahan
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan" class="nav-link">
                                    <i class="fa fa-file nav-icon"></i>
                                    <p>Pengesahan Pengajuan</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- PEMBATAS -->
                    <li class="nav-header">LAPORAN BERKALA</li>

                    <!-- MENU E -->
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/CetakBerkala" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Laporan Inventaris
                            </p>
                        </a>
                    </li>


                    <!-- MENU E -->
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>/Kasubag_PengesahanPengajuan/CetakBerkala2" class="nav-link">
                            <i id="menu2" class="nav-icon fa fa-folder kuning"></i>
                            <p>
                                Laporan Ruangan
                            </p>
                        </a>
                    </li>


                <?php
                }
                ?>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">