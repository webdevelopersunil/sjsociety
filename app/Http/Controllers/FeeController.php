<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;


class FeeController extends Controller{

    public function index(Request $reques){

        $fees   =   Fee::orderBy('class')->paginate(30);

        return view('fee_index', compact('fees'));
    }

    public function create(Request $request){

        return view('fee_create');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'class' => 'required|unique:fees',
            'status' => 'required',
            'amount' => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }

        try {

            $fee = new Fee();
            $fee->class             =   $request->class;
            $fee->status            =   $request->status;
            $fee->amount            =   $request->amount;
            $fee->save();
        
            return redirect()->route('fee.index')->with('success','Submitted successfully.');

        } catch (QueryException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Model not found: ' . $e->getMessage());
        } catch (\Exception $e) {
            
            return redirect()->back()->withInput()->with('error', 'An error occurred: ' . $e->getMessage());
        }   
    }

    public function view(Request $request){
        $detail =   Fee::find($request->id);
        return view('fee_view', compact('detail'));
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'class' => 'required|unique:fees,class,' . $request->id,
            'status' => 'required',
            'amount' => 'required|numeric'
        ]);
        
        if ($validator->fails()) {
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
        
        try {

            $fee = Fee::find($request->id);

            $fee->class             =   $request->class;
            $fee->status            =   $request->status;
            $fee->amount            =   $request->amount;
            $fee->save();
        
            return redirect()->route('fee.index')->with('success','Updated successfully.');

        } catch (QueryException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Database error: ' . $e->getMessage());
        } catch (ModelNotFoundException $e) {
            
            return redirect()->back()->withInput()->with('error', 'Model not found: ' . $e->getMessage());
        } catch (\Exception $e) {
            
            return redirect()->back()->withInput()->with('error', 'An error occurred: ' . $e->getMessage());
        }   
        
    }
}
