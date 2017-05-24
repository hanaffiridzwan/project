<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=> ['auth', 'pelajar']], function()
{

Route::get('/tugasan', 'TugasanController@getView');
Route::post('tugasan', 'TugasanController@insertFile');

});


Route::group(['middleware'=>['auth', 'penyelia']], function()
{
	Route::get('/muatturun', 'MuatTurunController@downFunc');
	Route::get('/borangPenyelian/{borangPenyelian}/sah', 'borangPenyeliansController@show');
Route::patch('/borangPenyelian/{borangPenyelian}/simpan', 'borangPenyeliansController@simpan');

});



Route::group(['before' => 'penyelia|pelajar'], function(){

// $temujanji->url = {profile}url('temujanjis/' . $temujanji->id);
Route::get('/profile', 'ProfilesController@index');
Route::patch('/profile', 'ProfilesController@update');
Route::get('/profile/edit', 'ProfilesController@edit');

Route::get('/temujanji/index', 'TemujanjiController@see');
Route::get('/temujanji/list', 'TemujanjiController@index');
Route::get('/temujanji/create', 'TemujanjiController@create');
Route::post('/temujanji/create', 'TemujanjiController@store');
Route::post('temujanji/{temujanji}/simpan', 'TemujanjiController@simpan');
Route::get('/temujanji/view', 'TemujanjiController@show');
Route::get('/temujanji/{temujanji}/edit', 'TemujanjiController@edit');
Route::patch('/temujanji/{temujanji}','TemujanjiController@update');
Route::resource('temujanji', 'TemujanjiController');

Route::get('/laporanPrestasi', 'laporanPrestasisController@index');
Route::get('/laporanPrestasi/create', 'laporanPrestasisController@create');
Route::post('/laporanPrestasi', 'laporanPrestasisController@store');
Route::get('laporanPrestasi/{laporanPrestasi}/edit', 'laporanPrestasisController@edit');
Route::patch('/laporanPrestasi/{laporanPrestasi}', 'laporanPrestasisController@update');

Route::delete('/laporanPrestasi/{laporanPrestasi}', 'laporanPrestasisController@destroy');

Route::get('/borangPenyelian', 'borangPenyeliansController@index');
Route::get('/borangPenyelian/create', 'borangPenyeliansController@create');
Route::post('/borangPenyelian', 'borangPenyeliansController@store');
Route::get('/borangPenyelian/{borangPenyelian}/edit','borangPenyeliansController@edit');
Route::patch('/borangPenyelian/{borangPenyelian}','borangPenyeliansController@update');

Route::get('/api', function() {
	$temujanjis = DB::table('temujanjis')->select('id', 'nama', 'aktiviti', 'masaMula as start', 'masaAkhir as end')->where('pengesahan','terima')->get();

	foreach($temujanjis as $temujanji)
	{
		$temujanji->title = $temujanji->aktiviti . ' - ' .$temujanji->nama;
		$temujanji->url = url('temujanji/' .$temujanji->id);
	}
	return $temujanjis;
});
});