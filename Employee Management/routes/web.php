<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listing', [EmployeeController::class, 'listing'])->name('listing');
Route::get('/paginate', [EmployeeController::class, 'pagination']);

Route::get('/insert', function () {
    return view('insert');
});
Route::post('/insert', [EmployeeController::class, 'insert'])->name('insertdata');
Route::get('/insert', function () {
    return view('insert');
})->name('insert');


Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');  
Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');