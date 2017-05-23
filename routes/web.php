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


// Route::get('temujanji', 'TemujanjiController@see');
// Route::resource('temujanjis', 'TemujanjiController');

// Route::patch('/laporanPrestasi/{id}', 'laporanPrestasisController@update');
// Route::delete('laporanPrestasi/{id}', 'laporanPrestasisController@destroy');->get()

Route::get('/tugasan', 'TugasanController@getView');
// Route::post('/tugasan', array('as'=>'insertfile','uses'=>'TugasanController@insertFile'));
Route::post('tugasan', 'TugasanController@insertFile');
});


Route::group(['middleware'=>['auth', 'penyelia']], function()
{
// Route::get('/profile', 'ProfilesController@index');
// Route::get('/profile/{profile}/edit', 'ProfilesController@edit');
// Route::patch('/profile', 'ProfilesController@update');

});


// Route::get('/temujanji', 'TemujanjiController@index');
// Route::get('/temujanji', 'TemujanjiController@create');




Route::group(['before' => 'penyelia|pelajar'], function(){

// $temujanji->url = {profile}url('temujanjis/' . $temujanji->id);
Route::get('/profile', 'ProfilesController@index');
Route::patch('/profile', 'ProfilesController@update');
Route::get('/profile/edit', 'ProfilesController@edit');
Route::get('/muatturun', 'MuatTurunController@downFunc');
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
Route::get('/laporanPrestasi/{tajukKajian', 'laporanPrestasisController@edit');
Route::delete('/laporanPrestasi/{tajukKajian}', 'laporanPrestasisController@destroy');
// Route::get('/laporanPrestasi/{id}', 'laporanPrestasisController@edit');
Route::get('/borangPenyelian', 'borangPenyeliansController@index');
Route::get('/borangPenyelian/create', 'borangPenyeliansController@create');
Route::post('/borangPenyelian', 'borangPenyeliansController@store');
// Route::get('/borangPenyelian/show', 'borangPenyeliansController@show');
Route::get('/borangPenyelian/{id}/show', 'borangPenyeliansController@update');
Route::get('/borangPenyelian/sah', 'borangPenyeliansController@show');



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