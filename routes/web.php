<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'HomeController@index');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/contact', 'HomeController@contact');
Route::get('/tentang', 'HomeController@tentang');
Route::get('/visimisi', 'HomeController@visimisi');
Route::get('/tujuansasaran', 'HomeController@tujuansasaran');
Route::get('/arsitektur', 'HomeController@arsitektur');
Route::get('/dasarhukum', 'HomeController@dasarhukum');
Route::get('/masterplan', 'HomeController@masterplan');
Route::get('/infrastruktur', 'HomeController@infrastruktur');
Route::get('/map', 'MapController@index');
Route::get('/titik', 'MapController@titik');
Route::get('/lokasi/{id}', 'MapController@lokasi');

Route::group(['middleware' => ['auth', 'cekrole:1']], function () {
    Route::get('/opd', 'OpdController@index');
    Route::post('/opd/create', 'OpdController@create');
    Route::get('/opd/{id}/edit', 'OpdController@edit');
    Route::post('/opd/{id}/update', 'OpdController@update');
    Route::get('/opd/{id}/delete', 'OpdController@delete');
    Route::get('/user', 'AuthController@index');
    Route::post('/user/create', 'AuthController@create');
    Route::get('/user/{id}/detail', 'AuthController@detail');
    Route::get('/user/{id}/edit', 'AuthController@edit');
    Route::post('/user/{id}/update', 'AuthController@update');
    Route::get('/user/{id}/delete', 'AuthController@delete');
    Route::get('/role', 'RoleController@index');
    Route::post('/role/create', 'RoleController@create');
    Route::get('/role/{id}/edit', 'RoleController@edit');
    Route::post('/role/{id}/update', 'RoleController@update');
    Route::get('/role/{id}/delete', 'RoleController@delete');
    Route::get('/agenda', 'AgendaController@index');
    Route::post('/agenda/create', 'AgendaController@create');
    Route::get('/agenda/{id}/detail', 'AgendaController@detail');
    Route::get('/agenda/{id}/edit', 'AgendaController@edit');
    Route::post('/agenda/{id}/update', 'AgendaController@update');
    Route::get('/agenda/{id}/delete', 'AgendaController@delete');
    Route::get('/jenisagenda', 'JenisagendaController@index');
    Route::post('/jenisagenda/create', 'JenisagendaController@create');
    Route::get('/jenisagenda/{id}/edit', 'JenisagendaController@edit');
    Route::post('/jenisagenda/{id}/update', 'JenisagendaController@update');
    Route::get('/jenisagenda/{id}/delete', 'JenisagendaController@delete');
    Route::get('/evaluasi', 'EvaluasiController@index');
    Route::post('/evaluasi/create', 'EvaluasiController@create');
    Route::get('/evaluasi/{id}/edit', 'EvaluasiController@edit');
    Route::post('/evaluasi/{id}/update', 'EvaluasiController@update');
    Route::get('/evaluasi/{id}/delete', 'EvaluasiController@delete');


    Route::get('/domain', 'DomainController@index');
    Route::post('/domain/create', 'DomainController@create');
    Route::get('/domain/{id}/edit', 'DomainController@edit');
    Route::post('/domain/{id}/update', 'DomainController@update');
    Route::get('/domain/{id}/delete', 'DomainController@delete');
    Route::get('/aspek', 'AspekController@index');
    Route::post('/aspek/create', 'AspekController@create');
    Route::get('/aspek/{id}/edit', 'AspekController@edit');
    Route::post('/aspek/{id}/update', 'AspekController@update');
    Route::get('/aspek/{id}/delete', 'AspekController@delete');
    Route::get('/indikator', 'IndikatorController@index');
    Route::post('/indikator/create', 'IndikatorController@create');
    Route::get('/indikator/{id}/edit', 'IndikatorController@edit');
    Route::post('/indikator/{id}/update', 'IndikatorController@update');
    Route::get('/indikator/{id}/delete', 'IndikatorController@delete');
    Route::get('/pertanyaan', 'PertanyaanController@index');
    Route::post('/pertanyaan/create', 'PertanyaanController@create');
    Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');
    Route::post('/pertanyaan/{id}/update', 'PertanyaanController@update');
    Route::get('/pertanyaan/{id}/delete', 'PertanyaanController@delete');

    Route::get('/pertanyaanumum', 'PertanyaanUmumController@index');
    Route::post('/pertanyaanumum/create', 'PertanyaanUmumController@create');
    Route::get('/pertanyaanumum/{id}/edit', 'PertanyaanUmumController@edit');
    Route::post('/pertanyaanumum/{id}/update', 'PertanyaanUmumController@update');
    Route::get('/pertanyaanumum/{id}/delete', 'PertanyaanUmumController@delete');

    Route::get('/wifi', 'WifiController@index');
    Route::post('/wifi/create', 'WifiController@create');
    Route::get('/wifi/{id}/edit', 'WifiController@edit');
    Route::post('/wifi/{id}/update', 'WifiController@update');
    Route::get('/wifi/{id}/delete', 'WifiController@delete');
    Route::get('/dokumentasi', 'DokumentasiController@index');
    Route::post('/dokumentasi/create', 'DokumentasiController@create');
    Route::get('/dokumentasi/{id}/detail', 'DokumentasiController@detail');
    Route::get('/dokumentasi/{id}/edit', 'DokumentasiController@edit');
    Route::post('/dokumentasi/{id}/update', 'DokumentasiController@update');
    Route::get('/dokumentasi/{id}/delete', 'DokumentasiController@delete');

    Route::get('/dataevaluasi', 'EvaluasiController@dataevaluasi');
    Route::get('/{id}/datadomain', 'EvaluasiController@datadomain');
    Route::get('/{id}/dataaspek', 'EvaluasiController@dataaspek');
    Route::get('/{id}/dataindikator', 'EvaluasiController@dataindikator');
    Route::get('/{id}/datapertanyaan', 'EvaluasiController@datapertanyaan');

    Route::get('/lihatvisimisi', 'HomeController@lihatvisimisi');
    Route::get('/datavisi', 'HomeController@datavisi');
    Route::get('/datamisi', 'HomeController@datamisi');
    Route::get('/lihattujuansasaran', 'HomeController@lihattujuansasaran');
    Route::get('/datatujuan', 'HomeController@datatujuan');
    Route::get('/datasasaran', 'HomeController@datasasaran');
    Route::get('/datadasarhukum', 'HomeController@datadasarhukum');
    Route::get('/datamasterplan', 'HomeController@datamasterplan');
    Route::get('/dataarsitektur', 'HomeController@dataarsitektur');
    Route::get('/datainfrastruktur', 'HomeController@datainfrastruktur');
});

Route::group(['middleware' => ['auth', 'cekrole:1,2']], function () {
    Route::get('/logout', 'AuthController@logout');
    Route::get('/profile', 'AuthController@profile');

    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/penilaian', 'PenilaianController@index');
    Route::get('/lihat-penilaian', 'PenilaianController@lihat');
    Route::get('/lihat-penilaian/{id}/detail', 'PenilaianController@detail');
    Route::get('/lihat-penilaian/{id}/penilaianindikator', 'PenilaianController@penilaianindikator');
    Route::post('/lihat-penilaian/{id}/update', 'PenilaianController@updatepertanyaan');
    Route::get('/lihat-penilaian/{id}/skorindex', 'PenilaianController@skor');
    Route::get('/lihat-penilaian/{id}/pertanyaanumum', 'PenilaianController@pertanyaanumum');
    Route::get('/lihat-penilaian/{id}/mandiri', 'PenilaianController@mandiri');

    Route::post('/lihat-penilaian/get_pertanyaan', 'PenilaianController@ajax_get_pertanyaan')->name('penilaian.get_pertanyaan');

    Route::get('/calender', 'AgendaController@calender');
    Route::get('/jscalender', 'AgendaController@jscalender');
    Route::get('/calender/{id}/detail', 'AgendaController@detailcalender');
    Route::post('/jawaban', 'PenilaianController@jawabanpertanyaan');
    Route::post('/jawabanumum', 'PenilaianController@jawabanumum');
    Route::post('/update/jawabanumum', 'PenilaianController@updatejawabanumum');
});
