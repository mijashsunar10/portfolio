<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('portfolio.index');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});
// Route::get('/index', function () {
//     return view('portfolio.index');
// })->name('index');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


// routes/web.php

require __DIR__.'/auth.php';
