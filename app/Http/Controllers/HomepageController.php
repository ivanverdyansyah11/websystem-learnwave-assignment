<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        return view('homepage.index', [
            'title' => 'Homepage Page',
        ]);
    }

    public function show(int $id) {
        return view('homepage.agenda', [
            'title' => 'Agenda Page',
        ]);
    }
}
