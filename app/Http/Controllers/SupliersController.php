<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupliersController extends Controller
{
    public function index() {
        $suppliers = [
            0 => ['name' => 'supplier1', 'status' => 'N']
        ];
        return view('app.suplier.index', compact('suppliers'));
    }
}
