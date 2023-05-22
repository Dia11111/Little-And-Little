<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $orderInfo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderInfo)
    {
        $this->orderInfo = $orderInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Thông tin đơn hàng của bạn')->view('email.checkoutmail');
    }
}
