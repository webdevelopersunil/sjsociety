<link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="{{ asset('css/candidate_detail.css') }}">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Candidate Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            <a href="{{ route('dashboard') }}">
                                {{ __('Go Back') }}
                            </a>
                        </x-primary-button>
                    </div>
                    
                    <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            First Name : <span>{{ ucfirst($candidate->first_name) }}</span>
                    </h2> -->

                    <div class="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="font-semibold" style="text-align:right;"  >
                                                Invoice ID#: <span style="color:red" >3645456124</span><br />
                                                Created At: <span style="color:red" >January 1, 2023</span><br />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="information">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td>
                                                {{ isset($candidate->village_address) && !empty($candidate->village_address) ? ucfirst($candidate->village_address) : '<span style="color: red;">----</span>' }}<br />
                                                {{ $candidate->post_office }}<br />
                                                <!-- {{$candidate->district}}, {{$candidate->state}} {{$candidate->pin_code}} -->
                                                {{ isset($candidate->district) && !empty($candidate->district) ? ucfirst($candidate->district) : '<span style="color: red;">----</span>' }}, 
                                                {{ isset($candidate->state) && !empty($candidate->state) ? ucfirst($candidate->state) : '<span style="color: red;">----</span>' }}
                                                {{ isset($candidate->pin_code) && !empty($candidate->pin_code) ? ucfirst($candidate->pin_code) : '<span style="color: red;">----</span>' }}
                                            </td>

                                            <td>
                                            {{ isset($candidate->first_name) && !empty($candidate->first_name) ? ucfirst($candidate->first_name) : '<span style="color: red;">----</span>' }}
                                            {{ isset($candidate->last_name) && !empty($candidate->last_name) ? ucfirst($candidate->last_name) : '<span style="color: red;">----</span>' }}<br />
                                                <!-- John Doe<br /> -->
                                            <span style="color:red;" >{{ucfirst($candidate->email)}}</span><br />
                                            Mob No.: {{ isset($candidate->mobile_number) && !empty($candidate->mobile_number) ? ucfirst($candidate->mobile_number) : '<span style="color: red;">----</span>' }}<br />
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Candidate Detail</td>

                                <td>Check #</td>
                            </tr>

                            <tr class="details">
                                <td>Father/Husband Name</td>
                                <td>
                                {{ isset($candidate->father_husband_name) && !empty($candidate->father_husband_name) ? ucfirst($candidate->father_husband_name) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Mother Name</td>
                                <td>
                                {{ isset($candidate->mother_name) && !empty($candidate->mother_name) ? ucfirst($candidate->mother_name) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Whatsapp Number</td>
                                <td>
                                {{ isset($candidate->whatsapp_number) && !empty($candidate->whatsapp_number) ? ucfirst($candidate->whatsapp_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Aadhar Number</td>
                                <td>
                                {{ isset($candidate->aadhar_number) && !empty($candidate->aadhar_number) ? ucfirst($candidate->aadhar_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Second Mobile Number</td>
                                <td>
                                {{ isset($candidate->second_mobile_number) && !empty($candidate->second_mobile_number) ? ucfirst($candidate->second_mobile_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            
                            <tr class="details">
                                <td>Qualification</td>
                                <td>
                                {{ isset($candidate->qualification) && !empty($candidate->qualification) ? ucfirst($candidate->qualification) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Gender</td>
                                <td>
                                {{ isset($candidate->gender) && !empty($candidate->gender) ? ucfirst($candidate->second_mobile_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Nationality</td>
                                <td style="color: black;" >
                                {{ isset($candidate->nationality) && !empty($candidate->nationality) ? ucfirst($candidate->nationality) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>father_occupation</td>
                                <td>
                                {{ isset($candidate->father_occupation) && !empty($candidate->father_occupation) ? ucfirst($candidate->father_occupation) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td>Post Office</td>
                                <td>
                                {{ isset($candidate->post_office) && !empty($candidate->post_office) ? ucfirst($candidate->post_office) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>

                            <tr class="heading">
                                <td>Item</td>

                                <td>Price</td>
                            </tr>

                            <tr class="item">
                                <td>Website design</td>

                                <td>$300.00</td>
                            </tr>

                            <tr class="item">
                                <td>Hosting (3 months)</td>

                                <td>$75.00</td>
                            </tr>

                            <tr class="item last">
                                <td>Domain name (1 year)</td>

                                <td>$10.00</td>
                            </tr>

                            <tr class="total">
                                <td></td>

                                <td>Total: $385.00</td>
                            </tr>
                        </table>
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
