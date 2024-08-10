<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    //

    public function totalStock(){
        $total=Stock::sum('qty');

        return view('admin.dashbord',compact('total'));
    }


}
