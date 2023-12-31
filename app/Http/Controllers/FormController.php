<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Crypt;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse{
        // |unique:form_data
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required',
            'whatsapp_number' => 'required|numeric|digits:10',
            'mobile_number' => 'required|numeric|digits:10',
            'second_mobile_number' => 'nullable|numeric|digits:10',
            'aadhar_number' => 'required|numeric|digits:12',
            'gender' => 'required',
            'village_address' => 'required',
        ]);
         
        if ($validator->fails()) {
            
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

        try {
            
            $form = new Form();
            $form->first_name           =   $request->first_name;
            $form->last_name            =   $request->last_name;
            $form->father_husband_name  =   $request->father_husband_name;
            $form->mother_name          =   $request->mother_name;
            $form->whatsapp_number      =   $request->whatsapp_number;
            $form->email                =   $request->email;
            $form->mobile_number        =   $request->mobile_number;
            $form->second_mobile_number =   $request->second_mobile_number;
            $form->qualification        =   $request->qualification;
            $form->gender               =   $request->gender;
            $form->other_education      =   $request->other_education;
            $form->nationality          =   $request->nationality;
            $form->father_occupation    =   $request->father_occupation;
            $form->aadhar_number        =   $request->aadhar_number;
            $form->village_address      =   $request->village_address;
            $form->post_office          =   $request->post_office;
            $form->district             =   $request->district;
            $form->pin_code             =   $request->pin_code;
            $form->state                =   $request->state;
            $form->payment              =   $this->getFeeAmount($request->qualification);
            $form->save();
            
            return redirect()->route('payment.fetch',Crypt::encryptString($form->id))->with('success','Submitted successfully.');

        } catch (QueryException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Model not found: ' . $e->getMessage());
        } catch (\Exception $e) {
            
            return redirect()->back()->withInput()->with('error', 'An error occurred: ' . $e->getMessage());
        }
        
    }

    public function getFeeAmount($feeId){

        if($feeId == 'others'){
            $feeDetail  =   Fee::where('class','others')->first();
        }else{
            $feeDetail  =   Fee::find($feeId);
        }
        
        return $feeDetail->amount;
    }

    public function paymentFetch(Request $request){

        $uid = Crypt::decryptString($request->uuid);
        $candidate  =   Form::where('id',$uid)->first();

        if($candidate){
            $payment    =   $candidate->payment * 100;
            $fee        =   Fee::find($candidate->qualification);
            $uid        =   Crypt::encryptString($candidate->id);
            
            return view('payment_status', compact('candidate','payment','uid'))->with('success','Submitted successfully.');
        }else{
            return redirect()->route('home');
        }

    }

    public function getInvoice(Request $request){
        
        $encUid     =   $request->uid;
        $uid        =   Crypt::decryptString($request->uid);
        $candidate  =   Form::find($uid);
        $fee        =   Fee::find($candidate->qualification);

        return view('pdf', compact('candidate','encUid','fee'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
