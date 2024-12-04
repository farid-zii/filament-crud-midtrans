<?php

namespace App\Jobs;

use App\Mail\OrderNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;

class SendPaymentReminder implements ShouldQueue
{
    use Queueable;


    protected $order;
    /**
     * Create a new job instance.
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $message = "Please complete your payment for order #{$this->order->id}.";
        Mail::to($this->order->customer_email)->send(
            new OrderNotification($this->order, $message)
        );
    }
}
