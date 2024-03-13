<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    // public function index() {
    //     return view('module.index', [
    //         'title' => 'Module Page',
    //     ]);
    // }

    public function show(int $id) {
        return view('module.detail', [
            'title' => 'Module Page',
        ]);
    }
}
