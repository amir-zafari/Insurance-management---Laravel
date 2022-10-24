<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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

// Route::get('/', [AuthenticatedSessionController::class, 'create'])
//                 ->middleware('guest')

////++++++++++++++++++++++++++//karfama//++++++++++++++++++++++++++//

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/',App\Http\Livewire\Admin\Dashboard\Index::class)->name('admin.index');

    Route::get('/karfarma',App\Http\Livewire\Admin\Karfarma\Index::class)->name('karfarma.index');
    Route::get('/karfarma/create',App\Http\Livewire\Admin\Karfarma\Create::class)->name('karfarma.create');
    Route::get('/karfarma/edit/{karfarma}',App\Http\Livewire\Admin\Karfarma\Update::class)->name('karfarma.edit');
    Route::get('/karfarma/trashed',App\Http\Livewire\Admin\Karfarma\Trashed::class)->name('karfarma.trashed');
    Route::get('/karfarma/check/{karfarma}',App\Http\Livewire\Admin\Karfarma\Check\Index::class)->name('karfarma.check');
    Route::get('/karfarma/list/{karfarma}',App\Http\Livewire\Admin\Karfarma\List\Index::class)->name('karfarma.list');

    Route::get('/bimeshode',App\Http\Livewire\Admin\Bimeshode\Index::class)->name('bimeshode.index');
    Route::get('/bimeshode/create',App\Http\Livewire\Admin\Bimeshode\Create::class)->name('bimeshode.create');
    Route::get('/bimeshode/edit/{bimeshode}',App\Http\Livewire\Admin\Bimeshode\Update::class)->name('bimeshode.edit');
    Route::get('/bimeshode/trashed',App\Http\Livewire\Admin\Bimeshode\Trashed::class)->name('bimeshode.trashed');

    Route::get('/jab',App\Http\Livewire\Admin\Jab\Index::class)->name('jab.index');
    Route::get('/jab/create',App\Http\Livewire\Admin\Jab\Create::class)->name('jab.create');
    Route::get('/jab/edit/{jab}',App\Http\Livewire\Admin\Jab\Update::class)->name('jab.edit');
    Route::get('/jab/trashed',App\Http\Livewire\Admin\Jab\Trashed::class)->name('jab.trashed');

    Route::get('/gallery/{bimeshode}',App\Http\Livewire\Admin\Bimeshode\Gallery\Index::class)->name('gallery.index');
  Route::get('/bimeshodegzarsh/{bimeshode}',App\Http\Livewire\Admin\Bimeshode\Bimeshodegzarsh\Index::class)->name('bimeshodegzarsh.index');

    Route::get('/hogog',App\Http\Livewire\Admin\Pardakht\Hgog\Index::class)->name('hogog.index');
    Route::get('/pol',App\Http\Livewire\Admin\Pardakht\Pol\Index::class)->name('pol.index');

    Route::get('/log',App\Http\Livewire\Admin\Log\Index::class)->name('log.index');

});
require __DIR__.'/auth.php';
