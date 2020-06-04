<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Donate;

class ShopController extends Controller
{



    public function preparePayment( )
    {
    $payment = Mollie::api()->payments()->create([
        'amount' => [
          'currency' => 'EUR',
          'value' => '25.00', 
        ],
        "description" => "New Donation!",
        'redirectUrl' => route('payment.success'),
         'webhookUrl'   => route('webhooks.mollie'),
      ]);

      $donate = new Donate;
      $donate->payment_id = $payment->id;
      $donate->donater_name = 'Pieter';
      $donate->payment_amount ='45';
      $donate->message='misschien';
      $donate->message_public= false;
      $donate->payment_status = 'Pending';

      $donate->save();

      return redirect($payment->getCheckoutUrl());
    }


    public function handle(Request $request) {

        if(! $request->has('id') ) {
          return ;
        } 

        $payment = Mollie::api()->payments()->get($request->id);

        if($payment->isPaid()) {

          $donate = Donate::where('payment_id','=',$request->id)->firstOrFail();
          $donate->payment_status = "Paid";
          $donate->update();
        }
      }

      public function paymentSuccess() {
        echo 'payment has been received';

    }
}
