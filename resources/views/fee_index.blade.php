<link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.min.css">
    <style>
        .data-table {width: 100%;margin-top: 20px;margin-bottom: 20px;border-collapse: collapse;}
        .data-table th, .data-table td {border: 1px solid #ddd;padding: 8px;text-align: left;}
        @media screen and (max-width: 600px) {.data-table {overflow-x: auto;display: block;}}
        .edit-btn {
            color: blue; /* Default color */
            text-decoration: none; /* Remove underline */
            transition: color 0.3s ease; /* Add transition for smooth color change */
        }

        .edit-btn:hover {
            color: darkblue; /* Color on hover */
        }
    </style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fee Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            <a href="{{ route('fee.create') }}">
                                {{ __('Create') }}
                            </a>
                        </x-primary-button>
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Class</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($fees->isEmpty())
                            <p>No data available</p>
                        @else
                            @foreach($fees as $index => $fee)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $fee->class }}</td>
                                <td>{{ $fee->amount }}</td>
                                <td>{{ $fee->status }}</td>
                                <td> <a class="edit-btn" href="{{ route('fee.view',$fee->id) }}">Edit</a> </td>
                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{ $fees->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
