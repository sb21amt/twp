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


	public function onSend()
	{
		$username = Auth::getUser();
		$user = $username->name;
		
		$memoradum = $_POST['memoradum'];
		$promises = $_POST['promises'];

        Db::table('legacies1')->insert(
    	['user' => $user, 'memoradum' => $memoradum, 'promises' => $promises]
		);


		if(isset($_POST['promises']) && ($_POST['promises']) == "Yes")
		{
			return Redirect::to('/legacies-2');
		}
		elseif(isset($_POST['promises']) && ($_POST['promises']) == "No")
		{
			return Redirect::to('/residual-estate');
		}

	}


}
?>