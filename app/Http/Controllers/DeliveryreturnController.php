<?php

namespace App\Http\Controllers;

use App\Models\Deliveryreturn;
use App\Models\Deliverytracking;
use Illuminate\Http\Request;

class DeliveryreturnController extends Controller
{
    //
    public function delete(Deliveryreturn $deliveryreturn,$id){
        $deliveryreturn=Deliveryreturn::findorFail($id);
        $deliveryreturn->delete();

        return redirect()->back();
    }


}
