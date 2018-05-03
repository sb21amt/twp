<?php 

namespace Shapla\Legacies1\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Legacies1 extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Legacies',
			'description' => 'Legacies Part 1 Form'
		];
	}

	// This retrieves the form inputs.
	public function onSend()
	{
		// Form inputs are then stored in variables.
		$username = Auth::getUser();
		$user = $username->name;
		
		$memoradum = $_POST['memoradum'];
		$promises = $_POST['promises'];

		// The variables are then inserted into the legacies1 table.
        Db::table('legacies1')->insert(
    	['user' => $user, 'memoradum' => $memoradum, 'promises' => $promises]
		);

        // If th user selects yes for the second questions.
		if(isset($_POST['promises']) && ($_POST['promises']) == "Yes")
		{
			// Then direct the user to the second part of the form which is legacies-2.
			return Redirect::to('/legacies-2');
		}
		// Else if the user selects no.
		elseif(isset($_POST['promises']) && ($_POST['promises']) == "No")
		{	
			// Then direct the user to the residual-estate page.
			return Redirect::to('/residual-estate');
		}

	}


}
?>