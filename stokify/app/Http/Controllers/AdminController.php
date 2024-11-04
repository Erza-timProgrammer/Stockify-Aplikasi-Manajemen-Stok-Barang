<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;
use Symfony\Component\Console\Logger\ConsoleLogger;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function data()
    {
        $adminName = auth()->user()->name;
        $adminRole = auth()->user()->role;

        return view('admin.dashboard', [
            'name' => $adminName,
            'role' => $adminRole
        ]);
    }
}
