<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function mailInvoice($invoice,$todayDate, $customer, $invoices, $totalAmount, $totalDisc){
        $email = 'emmanuelboshe@gmail.com';
        $todayDate = $todayDate;
        $customer = $customer;
        $invoices = $invoices;
        $totalAmount = $totalAmount;
        $totalDisc = $totalDisc;

        Mail::to($email)->send(new InvoiceMail($invoice,$todayDate, $customer, $invoices, $totalAmount, $totalDisc));

    }
}
