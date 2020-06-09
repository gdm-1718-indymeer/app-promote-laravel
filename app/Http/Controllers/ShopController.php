<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Donate;

class ShopController extends Controller
{


  public function show($locale)
  {
    $page =  \App\Page::where('slug','=','donates')->firstOrFail();
    $page->translate($locale);

    $donates = \App\Donate::where('message_public', true)->paginate($page['pagination']);
    return view(
      'front.donates.index',
      [
          'page' => $page,
          'donates' => $donates,
          'locale' => $locale,
      ]
    );
  }

    public function preparePayment(Request $r )
    {

      $payment = Mollie::api()->payments()->create([
        'amount' => [
          'currency' => 'EUR',
          'value' => $r->number . '.00', 
        ],
        "description" => "New Donation arrived by " . $r->name,
        'redirectUrl' => url(app()->getLocale() . '/donates'),
         'webhookUrl'   => route('webhooks.mollie'),
      ]);

      $donate = new Donate;
      $donate->payment_id = $payment->id;
      $donate->donater_name = $r->name;
      $donate->email = $r->email;
      $donate->payment_amount = $r->number;
      $donate->message= $r->message;
      $donate->message_public= $r->public;
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
        return \redirect(url(app()->getLocale() . '/donates'));

    }
}
