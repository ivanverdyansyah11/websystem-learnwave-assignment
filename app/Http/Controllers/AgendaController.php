<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index() {
        return view('agenda.index', [
            'title' => 'Agenda Page',
        ]);
    }

    public function show(int $id) {
        return view('agenda.detail', [
            'title' => 'Agenda Page',
        ]);
    }

    public function create() {
        return view('agenda.create', [
            'title' => 'Agenda Page',
        ]);
    }

    public function edit(int $id) {
        return view('agenda.edit', [
            'title' => 'Agenda Page',
        ]);
    }
}
