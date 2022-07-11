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
$routes->get('/jurnal/detail', 'LandingPage::Detailjurnal');

/*
 * --------------------------------------------------------------------
 * ADMIN 
 * --------------------------------------------------------------------
 */

// LOGIN
$routes->match(['get', 'post'], '/admin/login', 'AdminAuth::index', ['filter' => 'NoAuthFilter']);

$routes->group('', ['filter' => 'AuthFilter'], function ($routes) {
    $routes->group('/admin', function ($routes) {
        // LOGOUT
        $routes->get('logout', 'AdminAuth::logout');

        // DASHBOARD
        $routes->get('dashboard', 'AdminDashboard::index');

        // MASTER ADMIN
        $routes->group('master', function ($routes) {
            $routes->get('/', 'MasterAdmin::index');
            $routes->get('(:num)/view', 'MasterAdmin::view/$1');
            $routes->match(['get', 'post'], 'add', 'MasterAdmin::add');
        });

        // INDUK SANTRI
        $routes->group('induk-santri', function ($routes) {
            $routes->get('/', 'AdminIndukSantri::index');
            $routes->get('view', 'AdminIndukSantri::viewPage');
            $routes->get('edit', 'AdminIndukSantri::editPage');
            $routes->get('add', 'AdminIndukSantri::addPage');
            $routes->get('delete', 'AdminIndukSantri::deletePage');
            $routes->get('cetak', 'AdminIndukSantri::cetakPage');
        });

        // CALON SANTRI
        $routes->group('calon-santri', function ($routes) {
            $routes->get('/', 'AdminCalonSantri::index');
            $routes->get('view', 'AdminCalonSantri::viewPage');
            $routes->get('edit', 'AdminCalonSantri::editPage');
            $routes->get('delete', 'AdminCalonSantri::deletePage');
            $routes->get('cetak', 'AdminCalonSantri::cetakPage');
        });

        // INFAQ
        $routes->group('infaq', function ($routes) {
            $routes->get('/', 'AdminInfaq::index');
            $routes->get('edit', 'AdminInfaq::editPage');
            $routes->get('delete', 'AdminInfaq::deletePage');
            $routes->get('cetak', 'AdminInfaq::cetakPage');
        });

        // JADWAL TA'LIM
        $routes->group('jadwal-talim', function ($routes) {
            $routes->get('/', 'AdminJadwal::index');
            $routes->get('edit', 'AdminJadwal::editPage');
            $routes->get('delete', 'AdminJadwal::deletePage');
            $routes->get('cetak', 'AdminJadwal::cetakPage');
        });

        // JURNAL TA'LIM
        $routes->group('jurnal-talim', function ($routes) {
            $routes->get('/', 'AdminJurnal::index');
            $routes->get('view', 'AdminJurnal::viewPage');
            $routes->get('add', 'AdminJurnal::addPage');
            $routes->get('edit', 'AdminJurnal::editPage');
            $routes->get('delete', 'AdminJurnal::deletePage');
        });

        // MUTASI
        $routes->group('mutasi', function ($routes) {
            $routes->get('/', 'AdminMutasi::index');
            $routes->get('edit', 'AdminMutasi::editPage');
            $routes->get('delete', 'AdminMutasi::deletePage');
            $routes->get('cetak', 'AdminMutasi::cetakPage');
        });

        // DONATUR
        $routes->group('donatur', function ($routes) {
            $routes->get('/', 'AdminDonatur::index');
            $routes->get('edit', 'AdminDonatur::editPage');
            $routes->get('delete', 'AdminDonatur::deletePage');
            $routes->get('cetak', 'AdminDonatur::cetakPage');
        });

        // DOKUMEN
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
