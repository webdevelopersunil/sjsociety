<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Fee;

class CandidateController extends Controller
{
    public function index(){

        $candidates = Form::paginate(15);
        $fee        =   Fee::all();

        return view('dashboard', compact('candidates','fee'));
    }

    public function view(Request $request){
        
        $candidate  =   Form::find($request->id);
        $fee        =   Fee::find($candidate->qualification);
        
        return view('candidate_view', compact('candidate','fee'));
    }

    public function delete(Request $request){
        
        try {
            Form::where('id', $request->id)->delete();
            return redirect()->back()->with('success', 'Candidate Deleted Successfully.');
        } catch (QueryException $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the form: ' . $e->getMessage());
        }
    }

    public function find(Request $request)
    {
        $query = Form::query();

        if ($request->filled('aadhar_number')) {
            $query->where('aadhar_number', 'LIKE', '%' . trim($request->aadhar_number) . '%');
        }

        if ($request->filled('phone')) {
            $query->where('mobile_number', 'LIKE', '%' . trim($request->phone) . '%')
            ->orWhere('second_mobile_number', 'LIKE', '%' . trim($request->phone) . '%')
            ->orWhere('whatsapp_number', 'LIKE', '%' . trim($request->phone) . '%');
        }

        if ($request->filled('email')) {
            $query->where('email', 'LIKE', '%' . trim($request->email) . '%');
        }

        if ($request->filled('payment_status')) {
            $query->where('payment_status', 'LIKE', '%' . trim($request->payment_status) . '%');
        }

        if ($request->filled('qualification')) {
            $query->where('qualification', 'LIKE', '%' . trim($request->qualification) . '%');
        }

        // Add similar conditions for other fields
        $candidates = $query->paginate(10);
        $fee = Fee::all();

        return view('dashboard', compact('candidates', 'fee'));
    }


}
