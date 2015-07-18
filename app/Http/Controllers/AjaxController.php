<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Mail;
use App\Models\Contact;
use App\Models\Subscriber;

class AjaxController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return false;
	}
	
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function contact(Request $request)
	{

		$this->validate($request, [
			'name' => 'required|min:3|max:255',
			'email' => 'required|email',
			'contact_no' => 'numeric|min:10',
			'subject' => 'required',
			'message' => 'required',
		]);

		Mail::send('emails.contact_admin', array('input' => Input::get()), function($message) {
			$message
				->from(Input::get('email'), Input::get('name'))
				->to(env('MAIL_FROM_EMAIL'), env('MAIL_FROM_NAME'))
				->subject('Received new request');
		});

		Mail::send('emails.contact_user', array(),  function($message) {
			$message
				->to(Input::get('email'), Input::get('name'))
				->subject('Thanks for contacting us.');
		});

		Contact::create(Input::get());

		if (Input::get('subscribe')) {
			$subscriber = Subscriber::where('email', '=', Input::get('email'))->first();
			if (!isset($subscriber->exists) ) {
				$subscriber_create = Subscriber::create(Input::get());				
			}
		}

		return response()->json(['message' => 'Thanks for your request. Our representative will contact you soon.']);
	}

}
