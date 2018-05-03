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

	// This retrieves form input.
	public function onSend()
	{
		if( isset($_POST['accept']) )
		{
		    // User accepted terms & conditions, this will direct the user to the payment page.
		    return Redirect::to('/payment');
		}
		else
		{
		    // If the user did not accept then an error message will be echoed onto the page.
		    echo "you must accept before carrying on..";
		}
	}

}
?>