<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $excursion;
    public $request;

    public function __construct($excursion,$request )
    {
        $this->excursion = $excursion;
        $this->request = $request;
    }

    public function build()
    {
        return $this->view('mail_admin',['excursion'=>$this->excursion,'request'=>$this->request]);
    }
}
