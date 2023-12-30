<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
      <style>
        header { text-align: center;}
        header h1 {text-align: center;font-weight: bolder;font-size: 3.5rem;letter-spacing: .2rem;margin-top: 0;}
        header h2 {text-align: center;font-size: 2.4rem;margin-top: 0;}
        .highlight {background-color: red;color: white;display: inline-block;padding: .2rem;}
        .header-logo {padding: 10px;width: 100px;}
        .wrapper {width: 500px;margin: 0 auto;}
        .red-col{color: red;}
        .form-bg { background-color : #fef3c7 }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
        th { background-color: #f2f2f2; }

        /* styles.css */

      .razorpay-payment-button {
         /* Add your preferred styles here */
         display: inline-block;
         padding: 10px 20px;
         font-size: 16px;
         font-weight: bold;
         text-align: center;
         text-decoration: none;
         cursor: pointer;
         background-color: #4caf50;
         color: #ffffff;
         border: none;
         border-radius: 5px;
      }

      .razorpay-payment-button:hover {
         background-color: #45a049;
      }

      /* Add these styles to your existing CSS file or create a new one */
.view-button {
    display: inline-block;
    padding: 7px 20px;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    background-color: #3498db; /* Button background color */
    color: #ffffff; /* Button text color */
    border: none;
    border-radius: 5px;
}

.view-button:hover {
    background-color: #2980b9; /* Button background color on hover */
}


      </style>
   </head>
   <body class="form-bg" >
      <nav class="navbar navbar-default">
         <div class="container-fluid">
               <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">        
                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
               </div>
            <header>
                <h1>Super Champ Competition</h1>
                <h2 class="highlight" >Shikshit Jiavn Surakshit Jiavn Society, Hisar <span>(Reg No.01676)</span> </h2>
                <h2>M. 7988223255, 9050851556, 9728810110  ( <a href="{{ route('contact.us') }}" >Contact Us</a> / <a href="{{ route('terms.policies') }}" >Terms & Policies</a> / <a href="{{ route('home') }}" >Back To Form</a> )</h2>
            </header>
         </div>
         <!-- /.container-fluid -->
      </nav>

      <div class="container ">
        <div class="col-lg-12 col-md-12 ">
            
        </div>
         <div class="row ">
            <!-- Main Content -->
            <div class="col-xs-12 col-lg-12 col-sm-12 col-md-12">

               @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
               @endif
               @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
               @endif

               <div class="container-fluid">
                  <br>
                  <h3>Find your form detail, in case of failed payment or download your payment Invoice.</h3>
                  <br>
               </div>

               <form method="POST" action="{{ route('get.payment.status') }}" >
                  @csrf
                  <div class="row">
                     <div class="col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="phone">Phone Number <span class="red-col" >*</span></label>
                           <input type="number" value="{{ old('phone') }}" name="phone" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="email">Email Address</label>
                           <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="pull-right">
                     <input type="submit" value="submit" name="submit" class="btn btn-success">
                  </div>
               </form>
            </div>
            <br />
         </div>
         <br />
         <br />
         <br />

         <div class="container-fluid">
                <h1>Candidate Detail's</h1>
                <table>
                  <thead>
                     <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone</th>
                           <th>Qualification</th>
                           <th>Payment (INR)</th>
                           <th>Payment Status</th>
                           <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @if(isset($candidate) && !empty($candidate))
                        <tr>
                              <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                              <td>{{ $candidate->email }}</td>
                              <td>{{ $candidate->mobile_number }}</td>
                              <td>{{ $candidate->qualification }}</td>
                              <td>{{ $candidate->payment }}</td>
                              @if( $candidate->payment_status == 1 )
                                 <td style="color:green; font-size: 16px;" >  {{ __('Paid') }}</td>
                              @else
                                 <td style="color:red; font-size: 16px;" >  {{ __('Un-Paid') }}</td>
                              @endif
                              <td><a href="{{ route('get.invoice', $uid) }}" class="view-button">View/Download PDF</a></td>
                        </tr>
                     @else
                        <tr>
                              <td>----</td>
                              <td>----</td>
                              <td>----</td>
                              <td>----</td>
                              <td>----</td>
                              <td>----</td>
                              <td>----</td>
                              
                        </tr>
                     @endif
                     <!-- Add more rows as needed -->
                  </tbody>
               </table>
               @if( isset($candidate->payment_status) )
                  <div class="card card-default">
                     <div class="card-body text-center">
                        <form id="paymentForm" action="{{ route('razorpay.payment.store',$uid) }}" method="POST" >
                              @csrf
                              <script src="https://checkout.razorpay.com/v1/checkout.js"
                                    data-key="{{ env('RAZORPAY_KEY') }}"
                                    data-amount="{{$payment}}"
                                    data-buttontext="Pay {{$payment/100}} INR"
                                    data-name="Shikshit Jiavn Surakshit Jiavn Society"
                                    data-description="Super Champ Competition"
                                    data-image="https://th.bing.com/th/id/OIP.jVwkiQzBJ63-75jWyXVE_AHaGe?rs=1&pid=ImgDetMain"
                                    data-prefill.name="{{$candidate->first_name}}  {{$candidate->last_name}}"
                                    data-prefill.email="{{$candidate->email}}"
                                    data-prefill.phone="{{$candidate->phone}}"
                                    data-theme.color="#ff7529">
                              </script>
                        </form>
                     </div>
                  </div>
               @endif      
         </div>

         <br />
         <br />
         <br />
         <hr>
         <footer>
         <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
               <h4>Super Champ Competiotion</h4>
               <p>Copyright &copy; 2022 &middot; All Rights Reserved &middot; <a href="{{ route('home') }}">sjsjsocity.in</a></p>
            </div>
         </div>
         </footer>
         
         <hr>
      </div>
      
   </body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
    });
</script>
