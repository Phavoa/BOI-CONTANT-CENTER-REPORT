<?php

namespace App\Http\Controllers;

use App\Models\Report;

use Illuminate\Http\Request;




class per_stateController extends Controller
{

    public function per_state()
    {
        $reports = Report::all();

        $states = [
            'Abuja', 'Enugu', 'Bauchi', 'Ondo', 'Unknown', 'Kano', 'Nasarawa', 'Osun', 'Akwa Ibom', 'Taraba',
            'Kogi', 'Cross River', 'Abia', 'Anambra', 'Delta', 'Ogun', 'Edo', 'Rivers', 'Lagos', 'Borno',
            'Oyo', 'Imo', 'Niger', 'Jigawa', 'Katsina', 'Ekiti', 'Gombe', 'Zamfara', 'Yobe', 'Kaduna',
            'Sokoto', 'Bayelsa', 'Kwara', 'Kebbi', 'Adamawa', 'Plateau', 'Ebonyi', 'Benue'
        ];
        // shuffle($states);

        // // Initialize an associative array to group reports by state name
        // $groupedReports = [];

        // // Assign reports to their respective state groups
        // foreach ($reports as $report) {
        //     $state = $states[array_rand($states)]; // Randomly select a state
        //     $groupedReports[$state][] = $report; // Assign the report to its state group
        // }

        return view('per_state', ['states' => $states, 'reports' => $reports]);
    }

}
