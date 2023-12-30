<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
        <style>
            .go-back{
                text-align: right;
                maring: 0px;
            }
            .fontWeight{font-weight:800;}
            /* Add these styles to your existing CSS file or create a new one */
            .go-back a {
                display: inline-block;
                padding: 10px 20px;
                font-size: 16px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                background-color: #2ecc71; /* Button background color */
                color: #ffffff; /* Button text color */
                border: none;
                border-radius: 5px;
            }

            .go-back a:hover {
                background-color: #27ae60; /* Button background color on hover */
            }

        </style>
      <link rel="stylesheet" href="{{ asset('css/candidate_detail.css') }}">
   </head>
   <body class="form-bg"  >
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" id="contentToDownload" >
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                <div class="go-back">
                    <a href="{{ route('payment.fetch', $encUid) }}">
                        {{ __('Go Back') }}
                    </a>
                    <a href="#" onclick="downloadPDF()">
                        {{ __('Download as PDF') }}
                    </a>
                </div>
                    
                    <div class="invoice-box" id="invoice-box">
                        <table cellpadding="0" cellspacing="0">
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="font-semibold" style="text-align:center;"  >
                                                Super Champ Competition: <span style="color:red" >Shikshit Jiavn Surakshit Jiavn Society, Hisar(Reg No.01676)</span>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="font-semibold" style="text-align:right;"  >
                                                <!-- Invoice ID#: <span style="color:red" >3645456124</span><br /> -->
                                                Created At: <span style="color:red" >{{ $candidate->created_at }}</span><br />
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
                                <td class="fontWeight" >Father/Husband Name</td>
                                <td>
                                {{ isset($candidate->father_husband_name) && !empty($candidate->father_husband_name) ? ucfirst($candidate->father_husband_name) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Mother Name</td>
                                <td>
                                {{ isset($candidate->mother_name) && !empty($candidate->mother_name) ? ucfirst($candidate->mother_name) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Whatsapp Number</td>
                                <td>
                                {{ isset($candidate->whatsapp_number) && !empty($candidate->whatsapp_number) ? ucfirst($candidate->whatsapp_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Aadhar Number</td>
                                <td>
                                {{ isset($candidate->aadhar_number) && !empty($candidate->aadhar_number) ? ucfirst($candidate->aadhar_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Second Mobile Number</td>
                                <td>
                                {{ isset($candidate->second_mobile_number) && !empty($candidate->second_mobile_number) ? ucfirst($candidate->second_mobile_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            
                            <tr class="details">
                                <td class="fontWeight" >Qualification</td>
                                <td>
                                {{ isset($candidate->qualification) && !empty($candidate->qualification) ? ucfirst($candidate->qualification) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Gender</td>
                                <td>
                                {{ isset($candidate->gender) && !empty($candidate->gender) ? ucfirst($candidate->second_mobile_number) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Nationality</td>
                                <td style="color: black;" >
                                {{ isset($candidate->nationality) && !empty($candidate->nationality) ? ucfirst($candidate->nationality) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >father_occupation</td>
                                <td>
                                {{ isset($candidate->father_occupation) && !empty($candidate->father_occupation) ? ucfirst($candidate->father_occupation) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>
                            <tr class="details">
                                <td class="fontWeight" >Post Office</td>
                                <td>
                                {{ isset($candidate->post_office) && !empty($candidate->post_office) ? ucfirst($candidate->post_office) : '<span style="color: red;">----</span>' }}
                                </td>
                            </tr>

                            <tr class="heading">
                                <td class="fontWeight" >Payment Status</td>

                                @if($candidate->payment_status == 1)
                                    <td style="color:green; font-size:20px;" >Paid</td>
                                @else
                                    <td style="color:red; font-size:20px;" >Un Paid</td>
                                @endif
                            </tr>

                            <tr class="item">
                                <td class="fontWeight" >Qualification</td>

                                <td>{{ $fee->class }}</td>
                            </tr>

                            <tr class="item">
                                <td class="fontWeight" >Fee ( &#8377; )</td>

                                <td>{{ number_format($fee->amount, 2) }}</td>
                            </tr>

                            <tr class="total">
                                <td></td>

                                <td>Total: &#8377;{{ number_format($fee->amount, 2) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js"></script>
<script>
    function downloadPDF() {
        const element = document.getElementById('invoice-box');
        html2pdf(element);
    }
</script>