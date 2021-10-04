<?php

namespace App\Http\Controllers;
use App\Models\Log;
use App\Models\User;

use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function logs() {
        $logs = Log::all();
        return view('pages.logs', compact('logs'));
    }
}
