<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Form;

class FrontendController extends Controller{

    public function paymentStatus(){

        return view('payment_status');
    }

    public function contactUs(){

        return view('contact_us');
    }

    public function getPaymentStatus(Request $request){
        $phone  =   $request->phone;
        $email  =   $request->email;

        $candidate  =   Form::where([ 'email'=>$request->email, 'mobile_number'=>$request->phone ])
                        ->orWhere([ 'email'=>$request->email, 'mobile_number'=>$request->second_mobile_number ])->first();
        
        if(!empty($candidate)){
            return redirect()->route('payment.fetch',Crypt::encryptString($candidate->id))
            ->with('success','Found successfully.');
        }else{
            $candidate  =   null;
            return redirect()->route('payment.status')->with('error','No Record Found, Please use another details or try register with another details.');
        }
    }

    public function paymentData(Request $request): RedirectResponse{

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'mobile_number' => 'required|numeric'
        ]);
         
        if ($validator->fails()) {
            
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

        try {

            // Form::where()->first()
            dd($request->all());
        
            return redirect()->route('home')->with('success','Submitted successfully.');
        } catch (QueryException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Model not found: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'An error occurred: ' . $e->getMessage());
        }
        
    }

    public function save(Request $request){

        try {
            $contact            =   new Contact();
            $contact->name      =   $request->name;
            $contact->email     =   $request->email;
            $contact->message   =   $request->message;
            $contact->save();
            return redirect()->back()->with('success','Submitted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error','Failed to save contact. ' . $e->getMessage());
        }
    }

    public function termsPolicies(){
        return view('terms_policies');
    }
}
