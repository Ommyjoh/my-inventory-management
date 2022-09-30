<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;
    public $todayDate, $customer, $invoices, $totalAmount, $totalDisc, $invoice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($invoice,$todayDate, $customer, $invoices, $totalAmount, $totalDisc)
    {
        $this->todayDate = $todayDate;
        $this->customer = $customer;
        $this->invoices = $invoices;
        $this->totalAmount = $totalAmount;
        $this->totalDisc = $totalDisc;
        $this->invoice = $invoice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_USERNAME'), 'Ommyjoh')->subject('Ommyjoh.ManageMe')->view('emails.mail-invoice', [
            'todayDate' => $this->todayDate,
            'customer' => $this->customer,
            'invoices' => $this->invoices,
           'totalAmount' => $this->totalAmount,
            'totalDisc' => $this->totalDisc,
            'invoice' => $this->invoice
        ]);
    }
}
