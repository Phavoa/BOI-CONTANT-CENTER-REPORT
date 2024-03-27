<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class Per_dateController extends Controller
{
    public function per_date()
    {


        return view('per_date', [
            'reports_data' => Report::all(),
        ]);
    }
}
