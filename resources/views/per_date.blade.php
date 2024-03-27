@extends('layouts.app')

@section('top_nav')

@section('content')
@section('category', 'CALL CATEGORY PER DATE')

    <table class="min-w-full divide-y divide-gray-200 border-collapse">
        <thead>
            <tr>
                <th class="table-heading">Date(Entry_Date)</th>
                <th class="table-heading">Enquires</th>
                <th class="table-heading">Details Update</th>
                <th class="table-heading">Requests</th>
                <th class="table-heading">Payment Issues</th>
                <th class="table-heading">Wrong Location</th>
                <th class="table-heading">Call Dropped</th>
                <th class="table-heading">Total Count</th>
            </tr>
        </thead>

        @foreach ($reports_data as $report_data)
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="table-body">{{ $report_data->entry_date }}</td>
                    <td class="table-body">{{$report_data->entries}}</td>
                    <td class="table-body">{{$report_data->update}}</td>
                    <td class="table-body">{{$report_data->requests}}</td>
                    <td class="table-body">{{$report_data->payment_issues}}</td>
                    <td class="table-body">{{$report_data->wrong_location}}</td>
                    <td class="table-body">{{$report_data->call_dropped}}</td>
                    <td class="table-body">{{ $report_data->entries + $report_data->update + $report_data->requests + $report_data->payment_issues + $report_data->wrong_location + $report_data->call_dropped}}</td>
                </tr>
            <tbody>
        @endforeach
    </table>
@endsection
