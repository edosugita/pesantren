<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LandingPage::index');
$routes->get('/jadwal', 'LandingPage::jadwal');
$routes->get('/jurnal', 'LandingPage::jurnal');
$routes->get('/jurnal/view/(:segment)', 'LandingPage::Detailjurnal/$1');

/*
 * --------------------------------------------------------------------
 * ADMIN 
 * --------------------------------------------------------------------
 */

// LOGIN
$routes->match(['get', 'post'], '/admin/login', 'AdminAuth::index', ['filter' => 'NoAuthFilter']);
$routes->get('/registrasi', 'AdminAuth::registrasi');
$routes->match(['get', 'post'], '/registrasi/add', 'AdminAuth::add');

$routes->group('', ['filter' => 'AuthFilter'], function ($routes) {
    $routes->group('/admin', function ($routes) {
        // LOGOUT
        $routes->get('logout', 'AdminAuth::logout');

        // DASHBOARD
        $routes->get('dashboard', 'AdminDashboard::index');
        $routes->get('dashboard/data-chart', 'AdminDashboard::chart');

        // MASTER ADMIN
        $routes->group('master', function ($routes) {
            $routes->get('/', 'MasterAdmin::index');
            $routes->get('(:num)/view', 'MasterAdmin::view/$1');
            $routes->match(['get', 'post'], '(:num)/edit', 'MasterAdmin::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'MasterAdmin::delete/$1');
            $routes->match(['get', 'post'], 'add', 'MasterAdmin::add');
        });

        // MASTER KATEGORI
        $routes->group('master/kategori', function ($routes) {
            $routes->get('/', 'MasterKategori::index');
            $routes->match(['get', 'post'], '(:num)/edit', 'MasterKategori::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'MasterKategori::delete/$1');
            $routes->match(['get', 'post'], 'add', 'MasterKategori::add');
        });

        // MASTER KOP SURAT
        $routes->group('master/kode-surat', function ($routes) {
            $routes->get('/', 'MasterKop::index');
            $routes->match(['get', 'post'], '(:num)/edit', 'MasterKop::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'MasterKop::delete/$1');
            $routes->match(['get', 'post'], 'add', 'MasterKop::add');
        });

        // MASTER SEMESTER
        $routes->group('master/semester', function ($routes) {
            $routes->get('/', 'MasterSemester::index');
            $routes->match(['get', 'post'], '(:num)/edit', 'MasterSemester::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'MasterSemester::delete/$1');
            $routes->match(['get', 'post'], 'add', 'MasterSemester::add');
        });

        // INDUK SANTRI
        $routes->group('induk-santri', function ($routes) {
            $routes->get('/', 'AdminIndukSantri::index');
            $routes->get('(:num)/view', 'AdminIndukSantri::view/$1');
            $routes->match(['get', 'post'], '(:num)/edit', 'AdminIndukSantri::edit/$1');
            $routes->match(['get', 'post'], 'add', 'AdminIndukSantri::add');
            $routes->match(['get', 'post'], 'add/baru', 'AdminIndukSantri::addBaru');
            $routes->get('cetak', 'AdminIndukSantri::cetak');
        });

        // CALON SANTRI
        $routes->group('calon-santri', function ($routes) {
            $routes->get('/', 'AdminCalonSantri::index');
            $routes->get('(:num)/view', 'AdminCalonSantri::view/$1');
            $routes->match(['get', 'post'], '(:num)/edit', 'AdminCalonSantri::edit/$1');
            $routes->match(['get', 'post'], 'add', 'AdminCalonSantri::add');
            $routes->match(['get', 'post'], 'delete/(:num)', 'AdminCalonSantri::delete/$1');
            $routes->get('cetak', 'AdminCalonSantri::cetak');
        });

        // INFAQ
        $routes->group('infaq', function ($routes) {
            $routes->get('/', 'AdminInfaq::index');
            $routes->match(['get', 'post'], 'add', 'AdminInfaq::add');
            $routes->match(['get', 'post'], '(:num)/view', 'AdminInfaq::view/$1');
            $routes->get('delete', 'AdminInfaq::delete');
            $routes->get('cetak', 'AdminInfaq::cetak');
            $routes->match(['get', 'post'], 'data-santri/json-data-auto-fill', 'DataSantriJson::index');
        });

        // JADWAL TA'LIM
        $routes->group('jadwal-talim', function ($routes) {
            $routes->get('/', 'AdminJadwal::index');
            $routes->match(['get', 'post'], 'add', 'AdminJadwal::add');
            $routes->match(['get', 'post'], '(:num)/edit', 'AdminJadwal::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'AdminJadwal::delete/$1');
            $routes->get('cetak', 'AdminJadwal::cetak');
        });

        // JURNAL TA'LIM
        $routes->group('jurnal-talim', function ($routes) {
            $routes->get('/', 'AdminJurnal::index');
            $routes->get('(:segment)/view', 'AdminJurnal::view/$1');
            $routes->match(['get', 'post'], 'add', 'AdminJurnal::add');
            $routes->match(['get', 'post'], '(:num)/edit', 'AdminJurnal::edit/$1');
            $routes->match(['get', 'post'], 'delete/(:num)', 'AdminJurnal::delete/$1');
        });

        // MUTASI
        $routes->group('mutasi', function ($routes) {
            $routes->get('/', 'AdminMutasi::index');
            $routes->match(['get', 'post'], 'add', 'AdminMutasi::add');
            $routes->get('(:num)/view', 'AdminMutasi::view/$1');
            $routes->get('delete', 'AdminMutasi::delete');
            $routes->get('cetak', 'AdminMutasi::cetak');
        });

        // DONATUR
        $routes->group('donatur', function ($routes) {
            $routes->get('/', 'AdminDonatur::index');
            $routes->get('(:num)/view', 'AdminDonatur::view/$1');
            $routes->match(['get', 'post'], 'add', 'AdminDonatur::add');
            $routes->match(['get', 'post'], '(:num)/edit', 'AdminDonatur::edit/$1');
            $routes->get('delete', 'AdminDonatur::delete');
            $routes->get('cetak', 'AdminDonatur::cetak');
        });

        // DOKUMEN
        $routes->group('dokumen', function ($routes) {
            $routes->get('/', 'AdminDokumen::index');
            $routes->get('add', 'AdminDokumen::add');
            $routes->match(['get', 'post'], 'add/instansi', 'AdminDokumen::instansi');
            $routes->match(['get', 'post'], 'add/santri', 'AdminDokumen::santri');
            $routes->match(['get', 'post'], 'add/data-santri/json-data-auto-fill', 'DataSantriJson::index');
        });
    });
});

$routes->get('/admin', 'AdminDashboard::index', ['filter' => 'UrlFilter']);


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
