<?php 

namespace Shapla\Legacies2\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Legacies2 extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Legacies',
			'description' => 'Legacies Part 2 Form'
		];
	}


	// The form inputs are retrieved within this function.
	public function onSend()
	{
		// Variables are assigned to the form inputs.
		$username = Auth::getUser();
		$user = $username->name;

		$description_of_gift = $_POST['description_of_gift'];
		$owned = $_POST['owned'];
		$testator1 = $_POST['testator1'];
		$testator2 = $_POST['testator2'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$mobile = $_POST['mobile'];
		$home = $_POST['home'];

		// The variables are inserted into the legacies2 table.
        Db::table('legacies2')->insert(
    	['user' => $user, 'description_of_gift' => $description_of_gift, 'owned' => $owned, 'testator_1_relationship' => $testator1, 'testator_2_relationship' => $testator2, 'firstname' => $firstname, 'lastname' => $lastname, 'address_line_1' => $address1, 'address_line_2' => $address2, 'city' => $city, 'postcode' => $postcode, 'mobile_number' => $mobile, 'home_number' => $home]
		);

        // This will direct the user back to the legacies-2 if they wish to add more than 1 details.
        return Redirect::to('/legacies-2');

	}


}
?>