<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupliersController extends Controller
{
    public function index() {
        $supliers = ['Suplier 1'];
        return view('app.suplier.index', compact('supliers'));
    }
}
