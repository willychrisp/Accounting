<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/alertify.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url() ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell" style='font-size:24px'></i>
                        <span class="badge badge-warning navbar-badge jum" style="font-size: 24x;"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right">
                        <span class="dropdown-item dropdown-header jums"></span>
                        <div id="notif"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link">
                <img src="<?= base_url() ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/home" class="nav-link <?= ($page == 'home') ? " active" : "" ?>">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'beli') ? " active" : "" ?>">
                                <i class="nav-icon fas fa-solid fa-hand-holding-usd"></i>
                                <p>
                                    Pembelian
                                    <i class="fas fa-angle-left right nav-icon"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="/pembelian-page" class="nav-link<?= ($page == 'beli') ? " active" : "" ?>">
                                        <i class="nav-icon fas fa-wallet"></i>
                                        <p>
                                            Pembelian
                                        </p>
                                    </a>

                                </li>
                                <li class="nav-item">
                                    <a href="/hutang-page" class="nav-link <?= ($page == 'hutang') ? " active" : "" ?>">
                                        <i class="fa fa-balance-scale nav-icon"></i>
                                        <p>Hutang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/retur-pembelian-page" class="nav-link <?= ($page == 'retur-beli') ? " active" : "" ?>">
                                        <i class="fa fa-exchange-alt nav-icon"></i>
                                        <p>Retur</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/laporan-page" class="nav-link <?= ($page == 'laporan') ? " active" : "" ?>">
                                        <i class="fa fa-file-invoice nav-icon"></i>
                                        <p>Laporan Pembelian</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'stock') ? " active" : "" ?>">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Stock
                                    <i class="fas fa-angle-left right nav-icon"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="transfer-gudang-page" class="nav-link <?= ($page == 'tg') ? " active" : "" ?>">
                                        <i class="fas fa-shipping-fast nav-icon"></i>
                                        <p>Transfer Gudang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/advanced.html" class="nav-link">
                                        <i class="fas fa-warehouse nav-icon"></i>
                                        <p>Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/editors.html" class="nav-link">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>Persediaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/forms/validation.html" class="nav-link">
                                        <i class="fas fa-file-invoice nav-icon"></i>
                                        <p>Laporan Stock</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'jual') ? " active" : "" ?> ">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Penjualan
                                    <i class="fas fa-angle-left right nav-icon "></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/penjualan-page" class="nav-link <?= ($page == 'penjualan') ? " active" : "" ?>">
                                        <i class="nav-icon fas fa-wallet nav-icon"></i>
                                        <p>Penjualan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link <?= ($page == 'piutang') ? " active" : "" ?>">
                                        <i class="fa fa-balance-scale nav-icon"></i>
                                        <p>Piutang</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/retur-penjualan-page" class="nav-link <?= ($page == 'retur-jual') ? " active" : "" ?>">
                                        <i class="fa fa-exchange-alt nav-icon"></i>
                                        <p>Retur</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link <?= ($page == 'laporan-jual') ? " active" : "" ?>">
                                        <i class="fa fa-file-invoice nav-icon"></i>
                                        <p>Laporan Penjualan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'bayar') ? " active" : "" ?> ">
                                <i class="nav-icon far fa-handshake"></i>
                                <p>
                                    Pembayaran
                                    <i class="fas fa-angle-left right nav-icon "></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/pembayaran-page" class="nav-link <?= ($page == 'pembayaran') ? " active" : "" ?>">
                                        <i class="fas fa-money-check nav-icon"></i>
                                        <p>Pembayaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pelunasan-page" class="nav-link <?= ($page == 'pelunasan') ? " active" : "" ?>">
                                        <i class="fas fa-check-double nav-icon"></i>
                                        <p>Pelunasan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'uang') ? " active" : "" ?> ">
                                <i class="nav-icon fas fa-money-bill-wave-alt"></i>
                                <p>
                                    Keuangan
                                    <i class="fas fa-angle-left right nav-icon "></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/kasbesar-page" class="nav-link <?= ($page == 'kasbesar') ? " active" : "" ?>">
                                        <i class="nav-icon fas fa-book"></i>
                                        <p>Buku Kas Besar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/kaskecil-page" class="nav-link <?= ($page == 'kaskecil') ? " active" : "" ?>">
                                        <i class="fas fa-file-invoice nav-icon"></i>
                                        <p>Buku Kas Kecil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/bank-page" class="nav-link <?= ($page == 'bank') ? " active" : "" ?>">
                                        <i class="fas fa-landmark nav-icon"></i>
                                        <p>Bank</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="pages/tables/jsgrid.html" class="nav-link <?= ($page == 'laporan-jual') ? " active" : "" ?>">
                                        <i class="fas fa-percentage nav-icon"></i>
                                        <p>Neraca</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link <?= ($main == 'master') ? " active" : "" ?>">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Master
                                    <i class="fas fa-angle-left right nav-icon"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/master-stock" class="nav-link <?= ($page == 'master-stock') ? " active" : "" ?>">
                                        <i class="fas fa-boxes nav-icon"></i>
                                        <p>Stock</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/master-supplier" class="nav-link">
                                        <i class="fas fa-address-card nav-icon"></i>
                                        <p>Supplier</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/master-customer" class="nav-link">
                                        <i class="fas fa-id-card nav-icon"></i>
                                        <p>Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="master-sales" class="nav-link">
                                        <i class="fas fa-file-invoice nav-icon"></i>
                                        <p>Sales</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">KOREKSI</li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Stock
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Hutang
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <script>
            $(document).ready(function() {


                console.log("good");
                dataNotifJual().then(notif => {

                    $('.jum').html(notif.length);
                    $('.jums').html(notif.length + ' Penjualan Jatuh Tempo');
                    a = "";
                    for (var i = 0; i < notif.length; i++) {

                        b = new Date(notif[i]['tgl_jatuh_tempo_jual']);
                        c = new Date();
                        d = c.getTime() - b.getTime();
                        var cd = 24 * 60 * 60 * 1000,
                            t = Math.floor(d / cd);
                        a += '<div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <div class="media"> <div class="media-body"> <h3 class="dropdown-item-title"> ' + notif[i]['id_customer'] + ' </h3><p class="text-sm">No. Faktur <strong > ' + notif[i]["no_faktur_penjualan"] + ' </strong></p> <p class="text-sm">Tagihan jatuh tempo pada <strong style="color:red;"> ' + b.toLocaleDateString('en-GB') + ' </strong></p> <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>Terlambat ' + t + ' Hari </p> </div> </div> </a>';
                    }
                    $('#notif').html(a);
                })


            });

            async function dataNotifJual() {
                let response = await fetch('/api/datanotifjual/');
                let data = await response.json();
                return data;
            }
        </script>