<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendController extends Controller{

    public function contactUs(){

        return view('contact_us');
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
