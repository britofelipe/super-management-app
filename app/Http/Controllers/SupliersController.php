<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupliersController extends Controller
{
    public function index() {
        return view('app.suplier.index');
    }
}
