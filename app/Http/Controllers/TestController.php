<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(int $p1, int $p2) {
        //echo "A soma de $p1 e $p2 é: ".($p1+$p2);
        // return view('site.test', ['p1' => $p1, 'p2' => $p2]);    // Array
        return view('site.test', compact('p1', 'p2'));              // Compact
        return view('site.test')->with('p1', $p1)->with('p2', $p2); // With
    }
}
