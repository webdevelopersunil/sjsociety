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
               <form method="POST" action="{{ route('payment.status') }}" >
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
                <!-- <h2 class="highlight" >Shikshit Jiavn Surakshit Jiavn Society, Hisar <span>(Reg No.01676)</span> </h2> -->
                
                <table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Payment Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Sunil Kumar</td>
            <td>sunil@gmail.com</td>
            <td>78787878</td>
            <td>Paid</td>
            <td><a href="">View</a></td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

            
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