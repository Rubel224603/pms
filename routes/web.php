<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PaymentServiceController;
use App\Http\Services\PaymentService;
use App\Http\Controllers\API\StudentFromStudentApiController;

Route::get('/welcome',function (){
    dd(app());
    return view('website.index1');
});
Route::get('/test',function (){
        app()->make('first_service');
    //return view('website.index1');
});
Route::get('/test-one',function (){

    return "test-1";
});
Route::get('/me',function (PaymentService $paymentService){
    return $paymentService->subtraction(10,29) ;
});
Route::get('/ami',function(PaymentService $paymentService){
    return $paymentService->add(10,20);
});

//student date get Route;

Route::get('students-from-api',[StudentFromStudentApiController::class,'getStudents'])->name('student.all');
Route::get('students-from-api/{id}',[StudentFromStudentApiController::class,'singleStudent']);
Route::get('student-from-add-api',[StudentFromStudentApiController::class,'addForm'])->name('student.add.form');
Route::post('students-from-store-api',[StudentFromStudentApiController::class,'storeStudent'])->name('student.store.api');





Route::get('/payment',[PaymentServiceController::class,'makePayment']);
Route::get('/addnumber',[PaymentServiceController::class,'addNumber']);
Route::get('/subtraction',[PaymentServiceController::class,'subtraction']);

Route::get('/',[WelcomeController::class,'index']);
Route::get('/demo',[WelcomeController::class,'myService']);
Route::get('/home',[WelcomeController::class,'index'])->name('home');
Route::get('/details/{id}',[WelcomeController::class,'details'])->name('details');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/blog-create',[BlogController::class,'create'])->name('blog.create');
    Route::get('/blog-index',[BlogController::class,'index'])->name('blog.index');
    Route::get('/blog-edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog-store',[BlogController::class,'store'])->name('blog.store');
    Route::post('/blog-update/{id}',[BlogController::class,'update'])->name('blog.update');
    Route::get('/blog-delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
    Route::get('/blog-show/{id}',[BlogController::class,'show'])->name('blog.show');
    Route::get('/blog-all',[BlogController::class,'allBlog'])->name('blog.all');

});
