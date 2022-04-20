<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\snmp;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    public function readData()
    {
        return view('dashboard.snmp');
    }
}
