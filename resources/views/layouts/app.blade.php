<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BOI CONTACT CENTRE REPORT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-2 text-white text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-[#166534] text-slate-700 border-[#28a745] bg-[#28a745]
        }

        .btn a {
            @apply text-white
        }

        .table-heading {
            @apply px-20 py-3 text-center text-xs font-medium text-white uppercase tracking-wider border-white border-2  bg-[#212529] hover:bg-gray-700
        }

        .table-body {
            @apply px-6 py-4 whitespace-nowrap border border-gray-200
        }
    </style>

</head>

<body class=" flex justify-center p-10">
    <div class="min-w-[600px] max-w-[60%]">
        <div>
            @yield('top_nav')
            <h1 class="text-4xl font-medium mb-5 flex justify-center">PCGS - BOI CONTACT CENTRE REPORT</h1>
            <div class="flex justify-between border-3 gap-2">
                <button class="btn"><a href="{{ route('per_date') }}">Call category Per Date</a></button>
                <button class="btn"><a href="{{ route('per_state') }}">Call Category Per State</a></button>
                <button class="btn"><a href="#">Call Per Day</a></button>
                <button class="btn"><a href="#">Call Per State</a></button>
                <button class="btn"><a href="#">Call Per Category</a></button>
                <button class="btn"><a href="#">Daily Agent Call</a></button>
            </div>
            <h2 class="font-semibold text-3xl mt-4 mb-2">@yield('category')</h1>

        </div>
        <div class="overflow-x-auto  border-l border-gray-300">
            @yield('content')
        </div>

    </div>
</body>

</html>
