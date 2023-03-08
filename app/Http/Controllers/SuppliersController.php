<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index() {
        $suppliers = [
            0 => [
                'name' => 'supplier1',
                'status' => 'N',
                'cnpj' => '10.000.000/000-00'
            ],
            1 => [
                'name' => 'supplier2',
                'status' => 'Y',
                // 'cnpj' => '00.000.000/000-00'
            ]
        ];
        return view('app.supplier.index', compact('suppliers'));
    }
}
