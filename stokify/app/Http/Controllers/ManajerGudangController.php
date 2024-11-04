<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajerGudangController extends Controller
{
    public function index()
    {
        return view('manajer.dashboard');
    }

    public function data()
    {
        $manajerName = auth()->user()->name;
        $manajerRole = auth()->user()->role;

        return view('manajer.dashboard', [
            'name' => $manajerName,
            'role' => $manajerRole
        ]);
    }
}
