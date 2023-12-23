<link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.min.css">
    <style>
        /* Add your custom styles here */
        .data-table {
            width: 100%;
            margin-top: 20px;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        .data-table th, .data-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        @media screen and (max-width: 600px) {
            .data-table {
                overflow-x: auto;
                display: block;
            }
        }
        .view-detail{
            color:red;
        }
        .view-detail:hover{
            color:green;
            border: 2px solid white;
            background: yellow;
        }
    </style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Candidates List!") }}

                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Father/Husband Name</th>
                                    <th>Mother Name</th>
                                    <th>WhatsApp Number</th>
                                    <th>Aadhar Number</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <!-- <th>Second Mobile Number</th> -->
                                    <th>Qualification</th>
                                    <th>Gender</th>
                                    <!-- <th>Nationality</th>
                                    <th>Father Occupation</th>
                                    <th>Village Address</th>
                                    <th>Post Office</th>
                                    <th>District</th>
                                    <th>Pin Code</th>
                                    <th>State</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if($candidates->isEmpty())
                                <p>No data available</p>
                            @else
                                @foreach($candidates as $index => $candidate)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $candidate->first_name }}</td>
                                    <td>{{ $candidate->last_name }}</td>
                                    <td>{{ $candidate->father_husband_name }}</td>
                                    <td>{{ $candidate->mother_name }}</td>
                                    <td>{{ $candidate->whatsapp_number }}</td>
                                    <td>{{ $candidate->aadhar_number }}</td>
                                    <td>{{ $candidate->email }}</td>
                                    <td>{{ $candidate->mobile_number }}</td>
                                    <!-- <td>{{ $candidate->second_mobile_number }}</td> -->
                                    <td>{{ $candidate->qualification }}</td>
                                    <td>{{ $candidate->gender }}</td>
                                    <!-- <td>{{ $candidate->nationality }}</td>
                                    <td>{{ $candidate->father_occupation }}</td>
                                    <td>{{ $candidate->village_address }}</td>
                                    <td>{{ $candidate->post_office }}</td>
                                    <td>{{ $candidate->district }}</td>
                                    <td>{{ $candidate->pin_code }}</td>
                                    <td>{{ $candidate->state }}</td> -->
                                    <td><a class="view-detail" class="view-btn" href="{{ route('candidate.view',$candidate->id) }}">View</a></td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{ $candidates->links() }}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.data-table').DataTable();
        });
    </script>

</x-app-layout>