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

// DASHBOARD
$routes->get('/admin', 'AdminDashboard::index');

// INDUK SANTRI
$routes->get('/admin/induk-santri', 'AdminIndukSantri::index');
$routes->get('/admin/induk-santri/view', 'AdminIndukSantri::viewPage');
$routes->get('/admin/induk-santri/edit', 'AdminIndukSantri::editPage');
$routes->get('/admin/induk-santri/delete', 'AdminIndukSantri::deletePage');
$routes->get('/admin/induk-santri/cetak', 'AdminIndukSantri::cetakPage');

// CALON SANTRI
$routes->get('/admin/calon-santri', 'AdminCalonSantri::index');
$routes->get('/admin/calon-santri/view', 'AdminCalonSantri::viewPage');
$routes->get('/admin/calon-santri/edit', 'AdminCalonSantri::editPage');
$routes->get('/admin/calon-santri/delete', 'AdminCalonSantri::deletePage');
$routes->get('/admin/calon-santri/cetak', 'AdminCalonSantri::cetakPage');

// INFAQ
$routes->get('/admin/infaq', 'AdminInfaq::index');
$routes->get('/admin/infaq/edit', 'AdminInfaq::editPage');
$routes->get('/admin/infaq/delete', 'AdminInfaq::deletePage');
$routes->get('/admin/infaq/cetak', 'AdminInfaq::cetakPage');

// JADWAL TA'LIM
$routes->get('/admin/jadwal-talim', 'AdminJadwal::index');
$routes->get('/admin/jadwal-talim/edit', 'AdminJadwal::editPage');
$routes->get('/admin/jadwal-talim/delete', 'AdminJadwal::deletePage');
$routes->get('/admin/jadwal-talim/cetak', 'AdminJadwal::cetakPage');

// JURNAL TA'LIM
$routes->get('/admin/jurnal-talim', 'AdminJurnal::index');
$routes->get('/admin/jurnal-talim/view', 'AdminJurnal::viewPage');
$routes->get('/admin/jurnal-talim/edit', 'AdminJurnal::editPage');
$routes->get('/admin/jurnal-talim/delete', 'AdminJurnal::deletePage');

// MUTASI
$routes->get('/admin/mutasi', 'AdminMutasi::index');
$routes->get('/admin/mutasi/edit', 'AdminMutasi::editPage');
$routes->get('/admin/mutasi/delete', 'AdminMutasi::deletePage');
$routes->get('/admin/mutasi/cetak', 'AdminMutasi::cetakPage');

// DONATUR
$routes->get('/admin/donatur', 'AdminDonatur::index');
$routes->get('/admin/donatur/edit', 'AdminDonatur::editPage');
$routes->get('/admin/donatur/delete', 'AdminDonatur::deletePage');
$routes->get('/admin/donatur/cetak', 'AdminDonatur::cetakPage');

// DOKUMEN


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
