<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class contact extends Mailable
{
	use Queueable, SerializesModels;

//	public $reply;

	public function __construct()
	{
	}

	public function envelope()
	{
		return new Envelope(
			subject:'Hello',
		);
	}

	public function content()
	{
//		$reply = $this->reply;
		return new Content(
		// go to the view blade file and put the reply variable in it
			view:'emails.contact',
			// pass the reply variable to the view
//			with:compact('reply'),
		);
	}

	public function attachments()
	{
		return [];
	}
}
