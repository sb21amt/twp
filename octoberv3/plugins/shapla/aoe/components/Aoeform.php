<?php 

// This uniquely identifies the component.
namespace Shapla\Aoe\Components;


// These are used within the script, without these october cms will throw an error. For example, Without the DB, queries cannot be made as the connection to the databse has not been initiated.
use Cms\Classes\ComponentBase; 
use Input;
use Validator;
use Redirect;
use Auth;
use Db;


// Component class name.
class Aoeform extends ComponentBase

{
	// This function returns the component details.
	public function componentDetails()
	{
		return 
		[
			'name' => 'Appointment of Executor',
			'description' => 'Part 1 form'
		];
	}


	// This is the function stated in the data-request.
	public function onSend()
	{
		// This variable retrieves the user.
		$username = Auth::getUser();
		// Using $username the name is retrieved from the array of users.
		$user = $username->name;
		

		// These are variables that retrieve the form input using the name class in the default.htm file.
		$spouse_to_be_executor = $_POST['spouse_to_be_executor'];
		$sole_or_joint = $_POST['sole_or_joint'];
		$mirror_executor = $_POST['mirror_executor'];


		// This connects to the database using Db and selects the table which is appointment_of_executor. It inserts the assigned variable information into the table.
        Db::table('appointment_of_executor')->insert(
    	['user' => $user, 'spouse_to_be_executor' => $spouse_to_be_executor, 'sole_or_joint' => $sole_or_joint, 'mirror_executor' => $mirror_executor]
		);

		// This will direct the user to the next part of the form.
		return Redirect::to('/aoe2');

	}


}
?>