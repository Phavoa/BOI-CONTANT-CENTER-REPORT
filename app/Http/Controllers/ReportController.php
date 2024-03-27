<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
   public function index() {
        $reports_data = Report::all();
        return view('welcome', ['reports_data' => $reports_data]);
    }
}
