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
                <h2>M. 7988223255, 9050851556, 9728810110  ( <a href="{{ route('contact.us') }}" >Contact Us</a> / <a href="{{ route('terms.policies') }}" >Terms & Policies</a> / <a href="{{ route('payment.status') }}" >Payment Status</a> )</h2>
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

               <form method="POST" action="{{ route('form.add') }}" >
                  @csrf
                  <div class="row">
                     <div class="col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="first_name">First Name <span class="red-col" >*</span></label>
                           <input type="text" value="{{ old('first_name') }}" name="first_name" class="form-control" id="first_name" placeholder="First Name">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="last_name">Last Name</label>
                           <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" id="last_name" placeholder="Last Name">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="father_husband_name">Father's/Husband's Name</label>
                           <input type="text" value="{{ old('father_husband_name') }}" class="form-control" name="father_husband_name" id="father_husband_name" placeholder="Father's/Husband's Name">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="mother_name">Mother Name</label>
                           <input type="text" value="{{ old('mother_name') }}" class="form-control" name="mother_name" id="mother_name" placeholder="Mother Name">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
                     <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" value="{{ old('date_of_birth') }}" class="form-control" id="date_of_birth" name="date_of_birth">
                     </div>

                     </div>
                     <div class="col-lg-offset-0 col-lg-3 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="whatsapp_number">Whatsapp Number <span class="red-col" >*</span></label>
                           <input type="number" value="{{ old('whatsapp_number') }}" class="form-control" name="whatsapp_number" id="whatsapp_number" placeholder="Whatsapp number">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12">
                        <div class="form-group">
                           <label for="email">Email Address <span class="red-col" >*</span></label>
                           <input type="email" value="{{ old('email') }}" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="mobile_number">Mobile Number <span class="red-col" >*</span></label>
                           <input type="tel" value="{{ old('mobile_number') }}" class="form-control" name="mobile_number" id="mobile_number" placeholder="(916) 345-6783">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="second_mobile_number">Other Contact Number</label>
                           <input type="tel" value="{{ old('second_mobile_number') }}" class="form-control" name="second_mobile_number" id="second_mobile_number" placeholder="(916) 345-0000 x123">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
                        <div class="form-group">
                        <label for="qualification" class="select">Qualification <span class="red-col">*</span></label>
                        <select name="qualification" class="form-control" required="true" id="qualification">
                           @foreach($fees as $fee)
                              <option value="{{ $fee->id }}" @if(old('qualification') == $fee->id) selected @endif>{{ $fee->class }}</option>
                           @endforeach
                           <option value="others" @if(old('qualification') == 'others') selected @endif>others</option>
                        </select>

                        </div>
                     </div>

                     <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-12">
                        <div class="form-group">
                           <label for="other_education">Other Education</label>
                           <input disabled value="{{ old('other_education') }}" type="text" class="form-control" id="other_education" name="other_education" placeholder="Other Education">
                        </div>
                     </div>


                     <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="fee_status" class="select">Fee Status <span class="red-col" >*</span></label>
                           <select class="form-control">
                              <option value="online" >Online Paid</option>
                              <option value="offline" >Offline Paid</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="gender" class="select">Gender (M/F) <span class="red-col" >*</span></label>
                           <select name="gender" class="form-control">
                              <option value="male" >Male</option>
                              <option value="female" >Female</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-2 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="nationality" class="select">Nationality <span class="red-col" >*</span></label>
                           <select class="form-control" name="nationality">
                              <option value="indian" >Indian</option>
                              <option value="nra" >NRA</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
                        <div class="form-group">
                           <label for="father_occupation">Father Occupation</label>
                           <input type="text" value="{{ old('father_occupation') }}" class="form-control" id="father_occupation" name="father_occupation" placeholder="Father Occupation">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-6 col-xs-12 col-sm-12">
                        <div class="form-group">
                           <label for="aadhar_number">Aadhar Number</label>
                           <input type="aadhar_number" value="{{ old('aadhar_number') }}" class="form-control" id="aadhar_number" name="aadhar_number" placeholder="Aadhar Number">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-12 col-xs-12"> 
                        <br>
                        <span class="glyphicon glyphicon-info-sign"></span> Application's Address
                        <br><br>
                     </div>
                     <div class="col-lg-offset-0 col-lg-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                           <label for="village_address">Village Address <span class="red-col" >*</span></label>
                           <textarea name="village_address" class="form-control" id="village_address" cols="30" rows="3">{{ old('village_address') }}</textarea>
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                           <label for="post_office">Post office & Tehsil</label>
                           <textarea name="post_office" class="form-control" id="post_office" cols="30" rows="3">{{ old('post_office') }}</textarea>
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="district" name="district" class="select">District</label>
                           <input type="text" value="{{ old('district') }}" class="form-control" id="district" name="district" placeholder="District">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="pin_code">Pin Code</label>
                           <input type="text" value="{{ old('pin_code') }}" class="form-control" id="pin_code" name="pin_code" placeholder="Pin Code">
                        </div>
                     </div>
                     <div class="col-lg-offset-0 col-lg-4 col-xs-12 col-sm-6">
                        <div class="form-group">
                           <label for="state">State</label>
                           <input type="text" value="{{ old('state') }}" class="form-control" id="state" name="state" placeholder="State">
                        </div>
                     </div>
                     <div class="bg-warning col-lg-offset-0 col-lg-12 col-xs-12">
                        <div class="checkbox">
                           <label>
                           <input type="checkbox" value="">
                           I confirm that all the details I have entered are correct and accurate.
                           </label>
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
         <hr>
         <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
               <h4>Super Champ Competiotion</h4>
               <p>Copyright &copy; 2022 &middot; All Rights Reserved &middot; <a href="{{ route('home') }}">sjsjsocity.in</a></p>
            </div>
         </div>
         <hr>
      </div>
      
      <script type="text/javascript">
         // Add change event listener to the qualification select
         document.addEventListener('DOMContentLoaded', function() {
            var qualificationSelect = document.getElementById('qualification');
            var otherEducationInput = document.getElementById('other_education');
            qualificationSelect.addEventListener('change', function(){
                  if(qualificationSelect.value === 'others'){
                     otherEducationInput.disabled = false;
                  }else{
                     otherEducationInput.disabled = true;
                     otherEducationInput.value ="";
                  }
            });
         });
         
      </script>
   </body>
</html>