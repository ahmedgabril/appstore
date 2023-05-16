<?php

use App\Http\Livewire\Handelcat;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::middleware('setpubname')->group(function () {
    Route::get('/', [\App\Http\Controllers\genralldata::class, 'index'])->name('home');


    Route::get('/catapp/{appid}', \App\Http\Livewire\Appcatcontent::class)->name('catapp');
    Route::get('/allgame', \App\Http\Livewire\Allgame::class)->name('allgame');
    Route::get('/allapps', \App\Http\Livewire\Allapps::class)->name('allapps');
    Route::get('/pageinfo/{name}', \App\Http\Livewire\Pageinfo::class)->name('pageinfo');
    Route::get('/pagedownload/{name}', \App\Http\Livewire\Pagedownload::class)->name('pagedownload');
    Route::get('/contact-us', \App\Http\Livewire\ContactUs::class)->name('contact-us');

});

Route::get('/dashboard', function () {
    return view('dashboard');
 })->middleware(['auth', 'verified','onlyadmin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::get('/handel_site_setting', \App\Http\Livewire\HandelSiteSetting::class)->name('handel_site_setting');
    Route::get('/addcat', Handelcat::class)->name('addcat');
    Route::get('/handelapp', \App\Http\Livewire\Handelapps::class)->name('handelapp');
    Route::get('/handelusers', \App\Http\Livewire\Handelusers::class)->name('handelusers');
    Route::get('/handelrols', \App\Http\Livewire\Handelrols::class)->name('handelrols');
    Route::get('/contactme', \App\Http\Livewire\Contactme::class)->name('contactme');
    Route::get('/handelagent', \App\Http\Livewire\Handelagent::class)->name('handelagent');
    Route::get('/handelcreator', \App\Http\Livewire\Handelcreator::class)->name('handelcreator');
    Route::get('/agent_profile', \App\Http\Livewire\AgentProfile::class)->name('agent_profile');
    Route::get('/createtor_profile', \App\Http\Livewire\CreatetorProfile::class)->name('createtor_profile');
    Route::get('/createor_report/{name}', \App\Http\Livewire\CreateorReport::class)->name('createor_report');
    Route::get('/agent_change_password', \App\Http\Livewire\AgentChangePassword::class)->name('agent_change_password');
    Route::get('/createtor_change_password', \App\Http\Livewire\CreatetorChangePassword::class)->name('createtor_change_password');
    Route::get('/handelseo', \App\Http\Livewire\Handelseo::class)->name('handelseo');



});






require __DIR__.'/auth.php';
