<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffGudangController extends Controller
{
    public function index()
    {
        return view('staff.dashboard');
    }

    public function data()
    {
        $staffName = auth()->user()->name;
        $staffRole = auth()->user()->role;

        return view('staff.dashboard', [
            'name' => $staffName,
            'role' => $staffRole
        ]);
    }
}
