<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserEmailMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $id;
    public $email;

    public function __construct( $message,$id,$addr)
    {
        $this->message = $message;
        $this->id = $id;
        $this->email = $addr;
    }

    public function build()
    {
        return $this->view('mail',['data'=>$this->message,'id'=>$this->id,'email'=>$this->email]);
    }
}
