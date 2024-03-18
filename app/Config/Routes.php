<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::login');
$routes->get('/home', 'Home::index');

$routes->get('/pembelian-page', 'PembelianController::index');
$routes->post('/kirimdatapembelian', 'PembelianController::kirimDataPembelian');
$routes->get('/koreksi-pembelian/(:any)/(:any)', 'PembelianController::koreksiPembelian/$1/$2');
$routes->post('/updatedatapembelian', 'PembelianController::updateDataPembelian');
$routes->get('/delete-item-pemb/(:any)/(:any)/(:any)/(:any)', 'PembelianController::deleteItemPembelian/$1/$2/$3/$4');

$routes->get('/hutang-page', 'PembelianController::hutangPage');
$routes->get('/laporan-page', 'PembelianController::laporanPage');
$routes->get('/retur-pembelian-page', 'PembelianController::returPagePembelian');
$routes->get('/laporan-print', 'PembelianController::laporanPrint');
$routes->post('/pembelian-print', 'PembelianController::pembelianPrint');
$routes->get('/retur-print', 'PembelianController::returPrint');

$routes->post('/coba', 'PembelianController::coba');

$routes->get('/penjualan-page', 'PenjualanController::index');
$routes->get('/retur-penjualan-page/(:any)/(:any)', 'PenjualanController::returPagePenjualan/$1/$2');
$routes->get('/koreksi-penjualan/(:any)/(:any)', 'PenjualanController::koreksiPenjualan/$1/$2');
$routes->post('/faktur-print', 'PenjualanController::penjualanPrint');
$routes->get('/sj-print', 'PenjualanController::penjualanPrintsj');
$routes->post('/kirimdatapenjualan', 'PenjualanController::kirimDataPenjualan');
$routes->post('/updatedatapenjualan', 'PenjualanController::updateDataPenjualan');
$routes->post('/kirim-data-retur', 'PenjualanController::kirimDataRetur');
$routes->get('/delete-item-penj/(:any)/(:any)/(:any)/(:any)', 'PenjualanController::deleteItemPenjualan/$1/$2/$3/$4');

$routes->get('/transfer-gudang-page', 'StockController');
$routes->get('/tg-print', 'StockController::printTG');

$routes->get('/kasbesar-page', 'KeuanganController::kasBesarPage');
$routes->get('/kaskecil-page', 'KeuanganController::kasKecilPage');
$routes->get('/bank-page', 'KeuanganController::bankPage');


//Pembayaran
$routes->get('/pembayaran-page', 'PenjualanController::halamanPembayaran');
$routes->post('/kirim-pembayaran', 'PenjualanController::kirimPembayaran');
$routes->get('/pelunasan-page', 'PenjualanController::halamanPelunasan');
$routes->get('/form-pelunasan/(:segment)/(:segment)', 'PenjualanController::halamanFormPelunasan/$1/$2');
$routes->post('/kirim-pelunasan', 'PenjualanController::kirimPelunasan');

//Master
$routes->get('/master-stock', 'MasterController::masterStock');
$routes->post('/kirimmasterstock', 'MasterController::kirimMasterStock');
$routes->get('/kaskecil-page', 'MasterController::kasKecilPage');
$routes->get('/bank-page', 'MasterController::bankPage');


//API
$routes->resource('api/pemb/(:segment)/', ['controller' => 'API\PemanggilanAPI::dataPembelian/$1/']);
$routes->resource('api/pembdat/(:segment)/', ['controller' => 'API\PemanggilanAPI::dataListPembelian/$1/']);
$routes->resource('api/penjdat/(:segment)/(:segment)', ['controller' => 'API\PemanggilanAPI::dataListPenjualan/$1/$2']);

//API untuk filter data daftar pembelian
$routes->resource('api/fildatpem/(:segment)/(:segment)', ['controller' => 'API\PemanggilanAPI::dataDaftarPembelian/$1/$2']);

//API untuk filter data daftar penjualan
$routes->resource('api/fildatpenj/(:segment)/(:segment)', ['controller' => 'API\PemanggilanAPI::dataDaftarPenjualan/$1/$2']);

//API untuk ambil data dari Customer
$routes->resource('api/ambilcust/(:segment)/', ['controller' => 'API\PemanggilanAPI::dataDaftarCustomer/$1']);

//API untuk ambil data dari Customer
$routes->resource('api/ambiltranscust/(:segment)/', ['controller' => 'API\PemanggilanAPI::dataDaftarTransaksiCustomer/$1']);

//API untuk ambil data notifikasi
$routes->resource('api/datanotifjual/', ['controller' => 'API\PemanggilanAPI::dataNotifPenjualan']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
