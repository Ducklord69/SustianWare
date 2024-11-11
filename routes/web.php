<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Redirect root to homepage
Route::get('/', function () {
    return redirect('/home'); // Redirects to the homepage
});

// Homepage route
Route::get('/home', function () {
    return view('homepage'); // This will return the homepage.blade.php view
});

// About Us route
Route::get('/over', function () {
    return view('over'); // This will return the over.blade.php view
});

// Products route
Route::get('/producten', function () {
    return view('producten'); // This will return the producten.blade.php view
});

// Contact route
Route::get('/contact', function () {
    return view('contact'); // This will return the contact.blade.php view
});

// Contact form submission route
Route::post('/contact/submit', function (Request $request) {
    // Handle the form submission, e.g., send an email or store in the database
    // For demonstration, we'll just redirect back with a success message
    return redirect('/contact')->with('success', 'Bedankt voor uw bericht!');
});

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

