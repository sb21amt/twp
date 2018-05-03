<?php 

namespace Shapla\ThankYou\Components;

use Cms\Classes\ComponentBase; 
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Thankyou extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Thank You',
			'description' => 'Part 1 form'
		];
	}


	public function onSend()
	{
	
		$username = Auth::getUser();
		$user = $username->name;

		$aoe = Db::table('appointment_of_executor')->where('user', '=', $user)->first();

		$this['aoe_name'] = $aoe;

	}


}
?>