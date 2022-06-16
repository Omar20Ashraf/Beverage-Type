<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function buy(Request $request)
    {
        # code...
        Purchase::create($request->all());

        return response(200);
    }
}
