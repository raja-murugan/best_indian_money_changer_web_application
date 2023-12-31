<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SaleController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // DASHBOARD
    Route::middleware(['auth:sanctum', 'verified'])->get('/home', [HomeController::class, 'index'])->name('home');
    // DASHBOARD FILTER
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/home/datefilter', [HomeController::class, 'datefilter'])->name('home.datefilter');
});
// CURRENCY CONTROLLER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork_technology/currency', [CurrencyController::class, 'index'])->name('currency.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/currency/store', [CurrencyController::class, 'store'])->name('currency.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/currency/edit/{unique_id}', [CurrencyController::class, 'edit'])->name('currency.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/currency/delete/{unique_id}', [CurrencyController::class, 'delete'])->name('currency.delete');
});
// PURCHASE CONTROLLER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork_technology/purchase', [PurchaseController::class, 'index'])->name('purchase.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/purchase/edit/{unique_id}', [PurchaseController::class, 'edit'])->name('purchase.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/purchase/delete/{unique_id}', [PurchaseController::class, 'delete'])->name('purchase.delete');
    // DATAE FILTER
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/purchase/datefilter', [PurchaseController::class, 'datefilter'])->name('purchase.datefilter');
});
// SALE CONTROLLER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork_technology/sale', [SaleController::class, 'index'])->name('sale.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/sale/store', [SaleController::class, 'store'])->name('sale.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/sale/edit/{unique_id}', [SaleController::class, 'edit'])->name('sale.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/sale/delete/{unique_id}', [SaleController::class, 'delete'])->name('sale.delete');
    // DATAE FILTER
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/sale/datefilter', [SaleController::class, 'datefilter'])->name('sale.datefilter');
});
// EXPENSE CONTROLLER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork_technology/expense', [ExpenseController::class, 'index'])->name('expense.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/expense/edit/{unique_id}', [ExpenseController::class, 'edit'])->name('expense.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/expense/delete/{unique_id}', [ExpenseController::class, 'delete'])->name('expense.delete');
});
// INCOME CONTROLLER
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zwork_technology/income', [IncomeController::class, 'index'])->name('income.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/income/store', [IncomeController::class, 'store'])->name('income.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zwork_technology/income/edit/{unique_id}', [IncomeController::class, 'edit'])->name('income.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zwork_technology/income/delete/{unique_id}', [IncomeController::class, 'delete'])->name('income.delete');
});
