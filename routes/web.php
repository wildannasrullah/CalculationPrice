<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PapersizeController;
use App\Http\Controllers\Management\UserController;
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

Route::get('/kalkulasi', function () {
    if(!Session::get('login')){
        return redirect('/kalkulasi/login')->with('alert','Kamu harus login dulu');
    }else{
        return view('kalkulasi');
    }
});


Auth::routes();

Route::resource('/kalkulasi/login','AuLoginController');
Route::resource('/kalkulasi/logout', 'LogoutController');
Route::post('/kalkulasi/login/auCheck','AuLoginController@auCheck')->name('login.auCheck');

Route::resource('/kalkulasi/user','Management\UserController');

Route::resource('/kalkulasi/paper/group1','Papergroup1Controller');
Route::resource('/kalkulasi/paper/group2','Papergroup2Controller');
Route::resource('/kalkulasi/paper/gramature','PapergramatureController');
Route::resource('/kalkulasi/paper/size','PapersizeController');
Route::post('/kalkulasi/paper/size/fetch','PapersizeController@fetch')->name('size.fetch');
Route::post('/kalkulasi/paper/size/getGsm','PapersizeController@getGsm')->name('size.getGsm');

Route::resource('/kalkulasi/ink','InkController');
Route::resource('/kalkulasi/inklist','InkListController');

Route::resource('/kalkulasi/plat','PlatController');
Route::resource('/kalkulasi/platgroup','PlatGroupController');

Route::resource('/kalkulasi/foil','FoilController');
Route::resource('/kalkulasi/foilgroup','FoilGroupController');

Route::resource('/kalkulasi/klise','KliseController');

Route::resource('/kalkulasi/glue','GlueController');

Route::resource('/kalkulasi/plastic','PlasticController');
Route::resource('/kalkulasi/plasticgroup','PlasticGroupController');

Route::resource('/kalkulasi/inline','InlineController');

Route::resource('/kalkulasi/machine','MachineController');
Route::resource('/kalkulasi/machinegroup','MachineGroupController');

Route::resource('/kalkulasi/mica','MicaController');

Route::resource('/kalkulasi/board','BoardController');

Route::resource('/kalkulasi/laser','LaserController');
Route::resource('/kalkulasi/pertinax','PertinaxController');
Route::resource('/kalkulasi/laserpertinax','LaserPertinaxController');

Route::resource('/kalkulasi/setting','SettingController');
Route::resource('/kalkulasi/approval','ApprovalController');