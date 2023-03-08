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
                'cnpj' => '0',
                'ddd' => '11',
                'telephone' => '0000-0000',
            ],
            1 => [
                'name' => 'supplier2',
                'status' => 'Y',
                'cnpj' => '0',
                'ddd' => '85',
                'telephone' => '0000-0000',
            ],
            2 => [
                'name' => 'supplier3',
                'status' => 'Y',
                'cnpj' => '0',
                'ddd' => '32',
                'telephone' => '0000-0000',
            ],
        ];

        return view('app.supplier.index', compact('suppliers'));
    }
}
