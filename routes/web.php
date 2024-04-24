<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Resume;
use function Symfony\Component\Translation\t;

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
    return redirect('/home');
});

Route::get('/home', function () {
    return view('pages.home', [
        'heading' => "Welcome to Laragigs",
        'listings' => Listing::getLatest(3),
        'resumes' => Resume::getLatest(3), 
    ]);
});

Route::get('/listings', function () {
    return view('pages.listings', [
        'heading' => "Latest Listings",
        'listings' => Listing::all(),
    ]);
});

//example of Route Model Binding
//This will automatically fetch the listing with the id that matches the route parameter
//and return a 404 if no matching listing is found
Route::get('listing/{listing}', function (Listing $listing)  {

    return view ('pages.listing', [
        'heading' => $listing['title'],
        'listing' => $listing
    ]);
});

Route::get('/resumes', function () {
    return view('pages.resumes', [
        'heading' => "Job Seekers",
        'resumes' => Resume::all(),
    ]);
});

//manually redirecting if a resume with the given id is not found 
Route::get('resume/{id}', function ($slug)  {
    $resume = Resume::find($slug);
    if(!$resume) {
        abort(404);
    }
    return view ('pages.resume', [
        'heading' => $resume->name,
        'resume' => $resume
    ]);
});

Route::get('/submit', function () {
    return view('pages.submit', [
        'heading' => "Submit a Listing",
    ]);
});
