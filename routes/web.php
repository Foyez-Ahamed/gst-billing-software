<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\GstBillingController;
use App\Http\Controllers\PartyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [AppController::class, 'index'])->name('index');

// party routes
Route::get('addParty', [PartyController::class, 'addParty'])->name('addParty');

Route::post('createParty', [PartyController::class, 'createParty'])->name('createParty');

Route::get('manageParty', [PartyController::class, 'manageParty'])->name('manageParty');

// edit party route//
Route::get('editParty/{id}', [PartyController::class, 'editParty'])->name('editParty');

// update party route //
Route::put('updateParty/{id}', [PartyController::class, 'updateParty'])->name('updateParty');

// delete party //
Route::delete('deleteParty/{party}', [PartyController::class, 'deleteParty'])->name('deleteParty');




// .................................................//

//gstbilling route
Route::get('createBill', [GstBillingController::class, 'createBill'])->name('createBill');

Route::get('manageBill', [GstBillingController::class, 'manageBill'])->name('manageBill');

Route::get('print', [GstBillingController::class, 'print'])->name('print');