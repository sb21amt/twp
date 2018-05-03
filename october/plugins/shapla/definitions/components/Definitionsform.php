<?php 

namespace Shapla\Definitions\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Definitionsform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Definitions',
			'description' => 'Simple definitions'
		];
	}


	public function onSend()
	{
		// User accepted&nbsp;terms & conditions.  Go to next page.
		return Redirect::to('/tc');
	}

}
?>





