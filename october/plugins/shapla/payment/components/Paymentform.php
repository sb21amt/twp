<?php 

namespace Shapla\Payment\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Paymentform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Payment',
			'description' => 'Simple payment form'
		];
	}


	public function onSend()
	{
		// User accepted&nbsp;terms & conditions.  Go to next page.
		return Redirect::to('/aoe');
	}

}
?>





