@extends('layouts.app')

@section('top_nav')

@section('content')

    @section('category', 'CALL CATEGORY PER DATE')
    <table class="min-w-full divide-y divide-gray-200 table-auto border-collapse">
        <thead>
            <tr>
                <th class="table-heading">State</th>
                <th class="table-heading">Enquires</th>
                <th class="table-heading">Details Update</th>
                <th class="table-heading">Requests</th>
                <th class="table-heading">Payment Issues</th>
                <th class="table-heading">Wrong Location</th>
                <th class="table-heading">Call Dropped</th>
                <th class="table-heading">Total Count</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($states as $state)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $state }}</td>
                    @if (isset($reports[$loop->index]))
                        <td class="table-body">{{ $reports[$loop->index]->entries }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->update }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->requests }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->payment_issues }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->wrong_location }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->call_dropped }}</td>
                        <td class="table-body">{{ $reports[$loop->index]->entries + $reports[$loop->index]->update + $reports[$loop->index]->requests + $reports[$loop->index]->payment_issues + $reports[$loop->index]->wrong_location + $reports[$loop->index]->call_dropped }}
                        </td>
                    @else
                        <td colspan="7">No data available</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
