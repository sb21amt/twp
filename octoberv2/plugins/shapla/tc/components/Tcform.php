<?php 

namespace Shapla\Tc\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Tcform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Terms and conditions',
			'description' => 'Simple terms and conditions'
		];
	}


	public function onSend()
	{
		if( isset($_POST['accept']) )
		{
		    // User accepted&nbsp;terms & conditions.  Go to next page.
		    return Redirect::to('/payment');
		}
		else
		{
		    // User did not accept.  Go back.
		    echo "you must accept before carrying on..";
		}
	}

}
?>