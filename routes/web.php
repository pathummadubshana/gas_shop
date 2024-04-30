<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use app\Models\product;

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
    return view('./admin/dashbord');
});
Route::get('/update', function () {
    return view('./admin/update');
});



Route::get('/product', function(){
    return view('./admin/product');

});
Route::get('/customer', function(){
    return view('./admin/customer/customer');

});
Route::get('/employee', function(){
    return view('./admin/emloyee/employee');

});
Route::get('/vehcaltarget', function(){
    return view('./admin/vehical/vehcaltarget');

});

Route::get('/return', function(){
    return view('./admin/damage/return');

});
Route::get('/empupdate', function(){
    return view('./admin/emloyee/empupdate');

});
Route::get('/customeredit', function(){
    return view('./admin/customer/profileedit');

});





Route::get('admin/create',[App\Http\Controllers\VehicaltargetController::class,'create']);
Route::post('admin/create',[App\Http\Controllers\VehicaltargetController::class,'store']);
Route::get('admin/vehicaltarget',[App\Http\Controllers\VehicaltargetController::class,'index']);

Route::get('damage/create',[App\Http\Controllers\DamegeReturnController::class,'create']);
Route::post('damage/create',[App\Http\Controllers\DamegeReturnController::class,'store']);
Route::get('damage/index',[App\Http\Controllers\DamegeReturnController::class,'index']);

Route::get('custom/index',[App\Http\Controllers\CustomerController::class,'index']);
Route::get('emp/index',[App\Http\Controllers\EmployeeController::class,'index']);
Route::get('edit_emp/{id}',[App\Http\Controllers\EmployeeController::class,'edit']);
Route::PUT('update_employee/{id}',[App\Http\Controllers\EmployeeController::class,'update']);
Route::delete('delete_emp/{id}',[App\Http\Controllers\EmployeeController::class,'destroy']);




Route::resource('product', ProductController::class);
Route::resource('admin/customer', CustomerController::class);
//Route::resource('admin/employee', EmployeeController::class);





