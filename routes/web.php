<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KidsClubController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\NewsAndEventController;
use App\Http\Controllers\PersonalTrainingController;
use App\Http\Controllers\TermsAndConditionsController;
use App\Http\Controllers\TrainerController;
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

Route::middleware('set.locale')->group(static function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('about-us', [AboutController::class, 'index'])->name('about');
    Route::get('branches/{id}', [BranchController::class, 'show'])->name('branch.show');
    Route::get('memberships', [MembershipController::class, 'index'])->name('memberships');
    Route::get('trainers', [TrainerController::class, 'index'])->name('trainer');
    Route::get('personal-training', [PersonalTrainingController::class, 'index'])->name('personal-training');
    Route::get('kids-club', [KidsClubController::class, 'index'])->name('kids-club');
    Route::get('news-events', [NewsAndEventController::class, 'index'])->name('news-events');
    Route::get('news-events/{id}', [NewsAndEventController::class, 'show'])->name('news-events.show');
    Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
    Route::get('terms-and-conditions', [TermsAndConditionsController::class, 'index'])->name('terms');
});
