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
    return view('login');
});


Route::get('/public/home.blade.php', function () {
    return view('home');
});

Route::get('/login.blade.php', function () {
    return view('login');
});

Route::get('/biodata.blade.php', function () {
    return view('biodata');
});

Route::get('/bioadata1.blade.php', function () {
    return view('biodata1');
});

Route::get('/biodata2.blade.php', function () {
    return view('biodata2');
});

Route::get('/biodata3.blade.php', function () {
    return view('biodata3');
});

Route::get('/biodata4.blade.php', function () {
    return view('biodata4');
});

Route::get('/security.blade.php', function () {
    return view('security');
});

Route::get('/security1.blade.php', function () {
    return view('security1');
});

Route::get('/medical.blade.php', function () {
    return view('medical.blade.php');
});

Route::get('/medical1.blade.php', function () {
    return view('medical1.blade.php');
});

Route::get('/medical2.blade.php', function () {
    return view('medical2.blade.php');
});

Route::get('/cleaning.blade.php', function () {
    return view('cleaning.blade.php');
});

Route::get('/cleaning1.blade.php', function () {
    return view('cleaning1.blade.php');
});

Route::get('/cleaning2.blade.php', function () {
    return view('cleaning2.blade.php');
});

Route::get('/parole.blade.php', function () {
    return view('parole.blade.php');
});

Route::get('/parole1.blade.php', function () {
    return view('parole1.blade.php');
});

Route::get('/parole2.blade.php', function () {
    return view('parole2.blade.php');
});

Route::get('/visitations.blade.php', function () {
    return view('visitations.blade.php');
});

Route::get('/visitations1.blade.php', function () {
    return view('visitations2.blade.php');
});

Route::get('/visitations1.blade.php', function () {
    return view('visitations2.blade.php');
});

Route::get('/visitInsert.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/visitDelete.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/visitUpdata.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/biodataInsert.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/biodataDelete.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/biodataUpdata.blade.php', function () {
    return view('paroleInsert.blade.php');
});

Route::get('/paroleInsert.blade.php', function () {
    return view('paroleInsert.blade.php');
});

Route::get('/paroleDelete.blade.php', function () {
    return view('paroleInsert.blade.php');
});

Route::get('/paroleUpdata.blade.php', function () {
    return view('visitationsInsert.blade.php');
});

Route::get('/medicalInsert.blade.php', function () {
    return view('medicalInsert.blade.php');
});

Route::get('/medicalDelete.blade.php', function () {
    return view('medicalInsert.blade.php');
});

Route::get('/medicalUpdata.blade.php', function () {
    return view('medicalInsert.blade.php');
});

Route::get('/cleaningInsert.blade.php', function () {
    return view('cleaningInsert.blade.php');
});

Route::get('/cleaningDelete.blade.php', function () {
    return view('cleaningInsert.blade.php');
});

Route::get('/cleaningUpdata.blade.php', function () {
    return view('cleaningInsert.blade.php');
});

Route::get('/securityInsert.blade.php', function () {
    return view('securityInsert.blade.php');
});

Route::get('/securityDelete.blade.php', function () {
    return view('securityInsert.blade.php');
});

Route::get('/security.blade.php', function () {
    return view('securityInsert.blade.php');
});

Route::get('/supform.blade.php', function () {
    return view('supform.blade.php');
});

Route::get('pupform.blade.php', function () {
    return view('pupform.blade.php');
});

Route::get('/cupform.blade.php', function () {
    return view('cupform.blade.php');
});

Route::get('/mupform.blade.php', function () {
    return view('mupform.blade.php');
});

Route::get('/bupform.blade.php', function () {
    return view('bupform.blade.php');
});

Route::get('/incr.blade.php', function () {
    return view('incr.blade.php');
});







