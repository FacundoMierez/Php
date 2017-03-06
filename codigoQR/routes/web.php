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
    DNS2D::getBarcodePngPath("PrimerQR", "QRCODE",7,7);
	echo "<img src='PrimerQR.png' />";

	//echo DNS2D::getBarcodeHTML("4445645656", "QRCODE");
});
