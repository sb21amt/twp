<?php 

namespace Shapla\Homepage\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Homepageform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Create Will',
			'description' => 'Simple Button'
		];
	}


	public function onSend()
	{
		// User accepted&nbsp;terms & conditions.  Go to next page.
		return Redirect::to('/tc');
	}

}
?>





