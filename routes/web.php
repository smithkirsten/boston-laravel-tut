<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.listings', [
        'heading' => "Latest Listings",
        'listings' => Listing::all(),
    ]);
});

Route::get('listing/{id}', function ($slug)  {
    return view ('pages.listing', [
        'listing' => Listing::find($slug)
    ]);
});

