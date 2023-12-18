<?php

namespace App\Http\Controllers\Api;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequests;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }

    public function store(PaymentRequests $request)
    {
        $payment = new Payment;
        $payment->rental_id = $request->rental_id;
        $payment->admin_id = 1;
        $payment->add_charges = $request->add_charges;
        $payment->payment_date = $request->payment_date;
        $payment->payment_time = $request->payment_time;
        $payment->payment_amount = $request->payment_amount;

        $payment->save();

        return response()->json($payment, 201);
    }
}
