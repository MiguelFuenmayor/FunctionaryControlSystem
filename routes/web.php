<?php

use App\Livewire\HomePage;
use App\Livewire\PostList;
use App\Livewire\RankInfo;
use App\Livewire\PromoEdit;

use App\Livewire\PromoInfo;

use App\Livewire\RankTable;
use App\Livewire\ChargeEdit;
use App\Livewire\ChargeInfo;
use App\Livewire\PromoTable;
use App\Livewire\ChargeTable;
use App\Livewire\PromoCreate;
use App\Livewire\ChargeCreate;
use App\Livewire\DependencyEdit;
use App\Livewire\DependencyInfo;
use App\Livewire\DependencyTable;
use App\Livewire\FunctionaryEdit;
use App\Livewire\FunctionaryInfo;
use App\Livewire\DependencyCreate;
use App\Livewire\FunctionaryTable;
use App\Livewire\FunctionaryCreate;
use Illuminate\Support\Facades\Route;

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

// all the routes are protected by user autentication.
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // f now this is the  principal view
    Route::get('/',HomePage::class)->name('home');
    // functionary views
    Route::get('/functionary-edit/{id}',FunctionaryEdit::class)->name('functionary-edit');
    Route::get('/functionary-table',FunctionaryTable::class)->name('functionary-table');
    Route::get('/functionary-info/{id}',FunctionaryInfo::class)->name('functionary-info');
    Route::get('/functionary-create', FunctionaryCreate::class)->name('functionary-create');
    // dependency 
    Route::get('/dependency-table', DependencyTable::class)->name('dependency-table');
    Route::get('/dependency-info/{id}', DependencyInfo::class)->name('dependency-info');
    Route::get('/dependency-edit/{id}',DependencyEdit::class)->name('dependency-edit');
    Route::get('/dependency-create', DependencyCreate::class)->name('dependency-create');
    // promo ones
    Route::get('/promo-table', PromoTable::class)->name('promo-table');
    Route::get('/promo-info/{id}', PromoInfo::class)->name('promo-info');
    Route::get('/promo-edit/{id}', PromoEdit::class)->name('promo-edit');
    Route::get('/promo-create', PromoCreate::class)->name('promo-create');
    // charge ones
    Route::get('/charge-table', ChargeTable::class)->name('charge-table');
    Route::get('/charge-info/{id}', ChargeInfo::class)->name('charge-info');
    Route::get('/charge-edit/{id}', ChargeEdit::class)->name('charge-edit');
    Route::get('/charge-create', ChargeCreate::class)->name('charge-create');
    // Rank Table AND Info
    Route::get('/rank-table', RankTable::class)->name('rank-table');
    Route::get('/rank-info/{id}', RankInfo::class)->name('rank-info');
    // Posts
    Route::get('/posts', PostList::class)->name('post-list');
});
