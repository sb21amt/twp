<?php 

namespace Shapla\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Contactform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Contact Form',
			'description' => 'Simple contact form'
		];
	}


	public function onSend()
	{
		$validator = Validator::make(
	    [
	        'name' => input::get('name'),
	        'email' => input::get('email')
	    ],
	    [
	        'name' => 'required',
	        'email' => 'required|email'
	    ]);


		if($validator->fails()){
			
			// Return back to the contact form with errors shown above.
			return Redirect::back()->withErrors($validator);
		}
		else
		{
			// These variables are available inside the message as Twig
			$vars = [
				'name' => input::get('name'), 'email' => input::get('email'), 
				'content' => input::get('content')
			];

			Mail::send('shapla.contact::mail.message', $vars, function($message) {

			    $message->to('shapla.begum2095@gmail.com', 'Admin Person');
			    $message->subject('New message from contact form');

			});
		}
	}

}
?>