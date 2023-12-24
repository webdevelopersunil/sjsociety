<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendController extends Controller{

    public function paymentStatus(){

        return view('payment_status');
    }

    public function contactUs(){

        return view('contact_us');
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
