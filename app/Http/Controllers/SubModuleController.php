<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubModuleController extends Controller
{
    public function index() {
        return view('sub-module.index', [
            'title' => 'Sub Module Page',
        ]);
    }

    public function show(int $id) {
        return view('sub-module.detail', [
            'title' => 'Detail Sub Module Page',
        ]);
    }

    public function create() {
        return view('sub-module.create', [
            'title' => 'Create Sub Module Page',
        ]);
    }

    public function edit(int $id) {
        return view('sub-module.edit', [
            'title' => 'Edit Sub Module Page',
        ]);
    }
}
