<?php

namespace App\Http\Controllers;

use Razorpay\Api\Api;
use App\Models\Payment;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Razorpay\Api\Errors\BadRequestError;
use Razorpay\Api\Errors\GatewayTimeoutError;



class RazorpayController extends Controller{

    public function index(){
        return view('payment');
    }

    public function store(Request $request) {

        $input          =   $request->all();
        $api            =   new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $candidate      =   Form::find(Crypt::decryptString($request->uid));
        
        if (isset($input['razorpay_payment_id']) && !empty($input['razorpay_payment_id'])) {
            try {
                $payment = $api->payment->fetch($input['razorpay_payment_id']);
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $payment = Payment::create([
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount'] / 100,
                    'user_id'=>$candidate->id,
                    'json_response' => json_encode((array)$response),
                ]);

                $candidate->update(['payment_status' => 1]);
                
                // return redirect()->route('fee.index')->with('success', 'Submitted successfully.');
                return redirect()->route('payment.fetch',Crypt::encryptString($candidate->id))
                        ->with('success','Payment has been successfully.');
            } catch (GatewayTimeoutError $e) {
                return redirect()->back()->withInput()->with('error', 'Gateway timeout: The payment could not be captured due to a timeout. Please try again.');
            } catch (BadRequestError $e) {
                return redirect()->back()->withInput()->with('error', 'Bad request: The payment could not be captured due to a bad request. Please check the payment details and try again.');
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred: ' . $e->getMessage());
            }
        }
    
        return redirect()->route('fee.index')->with('error', 'Invalid payment details.');

    }

}
