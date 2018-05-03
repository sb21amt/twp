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


	// This retrieves the form inputs.
	public function onSend()
	{
		// Variables assigned to the form inputs.
		$username = Auth::getUser();
		$user = $username->name;

		$notes = $_POST['notes'];
		$pass_to_spouse = $_POST['pass_to_spouse'];
		$residue_distribute = $_POST['residue_distribute'];
		$who = $_POST['who'];


		// The varoables are then inserted into resdidual estate table.
        Db::table('residual_estate')->insert(
    	['user' => $user, 'notes' => $notes, 'pass_to_spouse' => $pass_to_spouse, 'residue_distribute' => $residue_distribute, 'who' => $who]
		);

        // This is the directed to the beneficiary page.
		return Redirect::to('/beneficiary');
	}


}
?>