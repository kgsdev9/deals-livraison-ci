<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function initialisePayment(Request $request)
    {
        //dd($request->all());
        $data = array(
            'merchantId' => "PP-F2197",
            'amount' => $request->amount * 650,
            'description' => 'code de livraison',
            'channel' => $request->paymentmethod ,
            'countryCurrencyCode' => "952",
            'referenceNumber' => "REF-".time(),
            'customerEmail' => Auth::user()->email,
            'customerFirstName' => Auth::user()->name,
            'customerLastname' => Auth::user()->name,
            'customerPhoneNumber' => Auth::user()->telephone,
            'notificationURL' => route('payment.sucess'),
            'returnURL' => route('failled.payment'),
            'returnContext' => '',
        );
        $data = json_encode($data);


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.paiementpro.net/webservice/onlinepayment/init/curl-init.php");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $response = curl_exec($ch);
        $obj = json_decode($response);
        $urlPayement = $obj->url ;

        return redirect()->to($urlPayement);
        // curl_close($ch);

    }

    public function successpayment() {

    }

    public function failledpayment() {

    }


}
