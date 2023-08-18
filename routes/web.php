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
*/
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware'   => 'auth'], function(){    
    /**
     * @Root home or Dashboard
     */
    Route::get('/home','HomeController@index')->name('home');
    /**
     * End here
     */
    
    /**
     * Kredit
     * @Table
     */
    Route::get('/kredit/CR006A','Obox\CR\CR006A@index');
    Route::get('/kredit/CR007A','Obox\CR\CR007A@index');
    Route::get('/kredit/CR008A','Obox\CR\CR008A@index');
    Route::get('/kredit/CR009A','Obox\CR\CR009A@index');

    /**
     * Form
     */
    Route::get('/kredit/Form/CR006A','Obox\CR\CR006A@create');
    Route::get('/kredit/Form/CR007A','Obox\CR\CR007A@create');
    Route::get('/kredit/Form/CR008A','Obox\CR\CR008A@create');
    Route::get('/kredit/Form/CR009A','Obox\CR\CR009A@create');

    /**
     * End Here Kredit
     */


    
    /**
     * 
     *  Liquid
     */
    Route::get('/likuiditas/LQ003A','Obox\LQ\LQ003A@index');
    Route::get('/likuiditas/LQ004A','Obox\LQ\LQ004A@index');
    Route::get('/likuiditas/LQ005A','Obox\LQ\LQ005A@index');
    Route::get('/likuiditas/LQ006A','Obox\LQ\LQ006A@index');

    /**
     * Form
     */
    Route::get('likuiditas/form/LQ003A','Obox\LQ\LQ003A@create');
    Route::get('likuiditas/form/LQ004A','Obox\LQ\LQ004A@create');
    Route::get('likuiditas/form/LQ005A','Obox\LQ\LQ005A@create');
    Route::get('likuiditas/form/LQ006A','Obox\LQ\LQ006A@create');
    /**
     * End of Liquid
     */

     /**
      * Operasional
      */
    Route::get('operasional/OP001A','Obox\OP\OP001A@index');
    Route::get('operasional/OP002A','Obox\OP\OP002A@index');
    Route::get('operasional/OP003A','Obox\OP\OP003A@index');

    /**
     * Form
     */
    Route::get('operasional/Form/OP001A','Obox\OP\OP001A@create');
    Route::get('operasional/Form/OP002A','Obox\OP\OP002A@create');
    Route::get('operasional/Form/OP003A','Obox\OP\OP003A@create');
    /**
     * End Of Operasional
     */

    /**
     * Referensi
     */
    Route::any('referensi/sandi','Obox\RF\RFTBL@index');
    /**
     * End Referensi
     */
});