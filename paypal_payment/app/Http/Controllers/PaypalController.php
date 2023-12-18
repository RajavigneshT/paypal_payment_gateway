<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Redirect;



class PaypalController extends Controller
{
    private $provider;

    public function __construct(){
        $this->provider = new PayPalClient;
        $this->provider->getAccessToken();
    }

    public function handlePayment(){
        $order['intent'] = 'CAPTURE';

        $purchase_units = [];

        $unit = [
            'items'=>[
                [
                    'name'=>'Red T-Shirt',
                    'quantity'=>1,
                    'unit_amount'=>[
                        'currency_code'=>'USD',
                        'value'=>'50.00'
                    ]
                ],
                [
                    'name'=>'Blue T-Shirt',
                    'quantity'=>1,
                    'unit_amount'=>[
                        'currency_code'=>'USD',
                        'value'=>'50.00'
                    ]
                ],
            ],
            'amount'=>[
                'currency_code'=>'USD',
                'value'=>'100.00',
                'breakdown'=>[
                    'item_total'=>[
                        'currency_code'=>'USD',
                        'value'=>'100.00'
                    ],
                ]
            ]
        ];

        $purchase_units[] = $unit;

        $order['purchase_units'] = $purchase_units;

        $order['application_context'] = [
            'return_url' => url('payment-success'),
            'cancel_url'=> url('payment-failed')
        ];

        $response = $this->provider->createOrder( $order );

        
        try {
            $approve_paypal_url = $response['links'][1]['href'];
            return Redirect::to($approve_paypal_url);
        } catch (\Throwable $th) {
            dd($th->getMessage() ,$response);
        }
 

    }

    public function paymentSuccess(Request $request){
        $response = $this->provider->capturePaymentOrder($request->get('token'));
        return view('success');
    }

    public function paymentFailed(){
        dd('Your payment has been canceled. Cancellation page goes here.');
    }
}