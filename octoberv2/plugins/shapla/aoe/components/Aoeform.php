<?php 

namespace Shapla\Aoe\Components;

use Cms\Classes\ComponentBase; 
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Aoeform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Appointment of Executor',
			'description' => 'Part 1 form'
		];
	}


	public function onSend()
	{
		$username = Auth::getUser();
		$user = $username->name;
		
		$spouse_to_be_executor = $_POST['spouse_to_be_executor'];
		$sole_or_joint = $_POST['sole_or_joint'];
		$mirror_executor = $_POST['mirror_executor'];

        Db::table('appointment_of_executor')->insert(
    	['user' => $user, 'spouse_to_be_executor' => $spouse_to_be_executor, 'sole_or_joint' => $sole_or_joint, 'mirror_executor' => $mirror_executor]
		);

		// Direct the user to the next part of the form.
		return Redirect::to('/aoe2');

	}


}
?>