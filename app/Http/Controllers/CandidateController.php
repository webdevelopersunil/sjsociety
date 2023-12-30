<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Fee;

class CandidateController extends Controller
{
    public function index(){

        $candidates = Form::paginate(30);

        return view('dashboard', compact('candidates'));
    }

    public function view(Request $request){
        
        $candidate  =   Form::find($request->id);
        $fee        =   Fee::find($candidate->qualification);
        return view('candidate_view', compact('candidate','fee'));
    }
}
