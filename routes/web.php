<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\product;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Tracking;

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
Route::get('/', function(){
    return view('./login/login');

});
Route::get('/register', function(){
    return view('./login/register');

});
Route::get('/dashbord', function () {
    return view('./admin/dashbord');
});
;


//product controll routes
Route::get('/product', function () {
    $data =product::all();
     return view('./admin/product',['data'=>$data]);
 });
 Route::post('/addproduct',[App\Http\Controllers\ProductController::class,'store']);
 Route::get('/edit/product/{product}',[App\Http\Controllers\ProductController::class,'edit']);
 Route::put('/update/product/{id}',[App\Http\Controllers\ProductController::class,'update']);
 Route::delete('/delete/product/{id}',[App\Http\Controllers\ProductController::class,'destroy']);



//customer controller routes
Route::get('/customer', function(){
    $data=Customer::all();
    return view('./admin/customer/customer',['data'=>$data]);

});
Route::post('/addcustomer',[App\Http\Controllers\CustomerController::class,'store']);
Route::get('/edit/customer/{customer}',[App\Http\Controllers\CustomerController::class,'edit']);
Route::put('/update/customer/{id}',[App\Http\Controllers\CustomerController::class,'update']);
Route::delete('/delete/customer/{id}',[App\Http\Controllers\CustomerController::class,'destroy']);

//employee controller routes
Route::get('/employee', function(){
    $data=Employee::all();
    return view('./admin/emloyee/employee',['data'=>$data]);

});
Route::post('/employeeadd',[App\Http\Controllers\EmployeeController::class,'store']);
Route::get('/edit/employee/{employee}',[App\Http\Controllers\EmployeeController::class,'edit']);
Route::put('/update/employee/{id}',[App\Http\Controllers\EmployeeController::class,'update']);
Route::delete('/delete/employee/{id}',[App\Http\Controllers\EmployeeController::class,'destroy']);







Route::get('/vehcaltarget', function(){
    return view('./admin/vehical/vehcaltarget');

});

Route::get('/return', function(){
    return view('./admin/damage/return');

});




Route::get('/inventory', function(){
    $data=product::all();
    return view('./admin/inventory/inventory',['data'=>$data]);
});


//supplier Routes
Route::get('/supplier', function(){
    $data=Supplier::all();
    return view('./admin/inventory/spplier',['data'=>$data]);

});

Route::post('/supplier/add',[App\Http\Controllers\SupplierController::class,'store']);
Route::get('/supplier/edit/{supplier}',[App\Http\Controllers\SupplierController::class,'edit']);
Route::put('/supplier/update/{id}',[App\Http\Controllers\SupplierController::class,'update']);
Route::delete('/supplier/delete/{id}',[App\Http\Controllers\SupplierController::class,'destroy']);





Route::get('/stock', function(){
    $data=Stock::all();
    return view('./admin/inventory/stock',['data'=>$data]);

});
Route::post('/stock/add',[App\Http\Controllers\StockController::class,'store']);





Route::get('/report', function(){
    return view('./admin/inventory/report');

});

//placemet rote
Route::get('/placement', function(){
    $data=Order::all();
    return view('./admin/order/placement',['data'=>$data]);


});
Route::post('/order/placement',[App\Http\Controllers\OrderController::class,'store']);


//tracking routes
Route::get('/tracking', function(){


    return view('./admin/order/tracking');


});
Route::get('/edit/tracking/{order}',[App\Http\Controllers\TrackingController::class,'edit']);
Route::post('/store/tracking',[App\Http\Controllers\TrackingController::class,'store']);

Route::get('/trackingdata', function(){
    $data=Tracking::all();


    return view('./admin/order/trakingdata',['data'=>$data]);


});







//fullfil Route

Route::get('/fulfillment',[App\Http\Controllers\FullfillController::class,'conect']);





Route::get('/return', function(){
    return view('./admin/dilivery/return');

});
Route::get('/routing', function(){
    return view('./admin/dilivery/routing');

});
Route::get('/delivery/sheduling', function(){
    return view('./admin/dilivery/sheduli');

});
Route::get('/traking', function(){
    return view('./admin/dilivery/traking');

});
Route::get('/delivery/lode', function(){
    return view('./admin/dilivery/vehicallode');

});

Route::get('/bill', function(){
    return view('./admin/billing/billing');

});

Route::get('/invoice', function(){

    return view('./admin/billing/invoice');

});

Route::get('/payment', function(){
    return view('./admin/billing/payment');

});


Route::get('/customer/report', function(){
    return view('./admin/reporte/customer');

});
Route::get('/inventory/report', function(){
    return view('./admin/reporte/inventory');

});
Route::get('/sales', function(){
    return view('./admin/reporte/sales');

});









Route::get('admin/create',[App\Http\Controllers\VehicaltargetController::class,'create']);
Route::post('admin/create',[App\Http\Controllers\VehicaltargetController::class,'store']);
Route::get('admin/vehicaltarget',[App\Http\Controllers\VehicaltargetController::class,'index']);

Route::get('damage/create',[App\Http\Controllers\DamegeReturnController::class,'create']);
Route::post('damage/create',[App\Http\Controllers\DamegeReturnController::class,'store']);
Route::get('damage/index',[App\Http\Controllers\DamegeReturnController::class,'index']);


// Route::get('emp/index',[App\Http\Controllers\EmployeeController::class,'index']);
// Route::get('edit_emp/{id}',[App\Http\Controllers\EmployeeController::class,'edit']);
// Route::put('update_employee/{id}',[App\Http\Controllers\EmployeeController::class,'update']);
// Route::delete('delete_emp/{id}',[App\Http\Controllers\EmployeeController::class,'destroy']);





//user login controller
Route::post('login',[App\Http\Controllers\loginControler::class,'login']);

//product controler
















