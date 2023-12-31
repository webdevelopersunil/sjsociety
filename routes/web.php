<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\RazorpayController;

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

// Route::get('/', function () { return view('welcome');
// })->name('home');

Route::get('/',[FrontendController::class,'home'])->name('home');

Route::get('product',[RazorpayController::class,'index']);
Route::post('razorpay-payment/{uid}',[RazorpayController::class,'store'])->name('razorpay.payment.store');

Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact.us');
Route::post('/get/payment/status', [FrontendController::class, 'getPaymentStatus'])->name('get.payment.status');
Route::get('/payment/status', [FrontendController::class, 'paymentStatus'])->name('payment.status');
Route::post('/payment/data', [FrontendController::class, 'paymentData'])->name('payment.data');
Route::post('/contact-us', [FrontendController::class, 'save'])->name('contact.save');
Route::get('/terms/policies', [FrontendController::class, 'termsPolicies'])->name('terms.policies');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/fee', [FeeController::class, 'index'])->name('fee.index');
    Route::get('/fee/create', [FeeController::class, 'create'])->name('fee.create');
    Route::post('/fee', [FeeController::class, 'store'])->name('fee.store');
    Route::get('/fee/view/{id}', [FeeController::class, 'view'])->name('fee.view');
    Route::post('/fee/update', [FeeController::class, 'update'])->name('fee.update');

    Route::get('/dashboard',[CandidateController::class, 'index'])->middleware(['verified'])->name('dashboard');
    Route::get('/candidate/view/{id}', [CandidateController::class, 'view'])->name('candidate.view');
    Route::get('/candidate/delete/{id}', [CandidateController::class, 'delete'])->name('candidate.delete');
    Route::post('/candidate/find', [CandidateController::class, 'find'])->name('candidate.find');
});

// Route::get('/candidate', [CandidateController::class, 'index'])->name('candidate.index');

Route::post('/form/add', [FormController::class, 'store'])->name('form.add');
Route::get('/payment/{uuid}', [FormController::class, 'paymentFetch'])->name('payment.fetch');
Route::get('get-invoice/{uid}',[FormController::class,'getInvoice'])->name('get.invoice');

require __DIR__.'/auth.php';
