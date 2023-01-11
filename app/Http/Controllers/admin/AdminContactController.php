<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use function compact;
use function dd;
use function redirect;

class AdminContactController extends Controller
{
	public function index()
	{
		$messages = Contact::all();
		return view('admin.contact.index', compact('messages'));
	}

	public function reply(Contact $contact)
	{

		return view('admin.contact.reply', compact('contact'));
	}

	public function destroy(Contact $contact)
	{
		$contact->delete();
		return redirect()->back()->with('success', 'Message deleted successfully');
	}

	public function send(Request $request)
	{
		Mail::to('dabourdabour28@yahoo.com')->send(new \App\Mail\contact());
		return redirect()->back()->with('success', 'Message sent successfully');
	}
}