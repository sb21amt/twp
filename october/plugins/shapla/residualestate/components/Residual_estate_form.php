<?php 

namespace Shapla\Residualestate\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Residual_estate_form extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Residual Estate',
			'description' => 'Part 1 form'
		];
	}


	public function onSend()
	{
		$username = Auth::getUser();
		$user = $username->name;

		$notes = $_POST['notes'];
		$pass_to_spouse = $_POST['pass_to_spouse'];
		$residue_distribute = $_POST['residue_distribute'];
		$who = $_POST['who'];


        Db::table('residual_estate')->insert(
    	['user' => $user, 'notes' => $notes, 'pass_to_spouse' => $pass_to_spouse, 'residue_distribute' => $residue_distribute, 'who' => $who]
		);

		return Redirect::to('/beneficiary');
	}


}
?>