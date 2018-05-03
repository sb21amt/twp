<?php 

namespace Shapla\Beneficiary\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Beneficiaryform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Residual Estate',
			'description' => 'Part 2 form'
		];
	}

	// Form input retrieved 
	public function onSend()
	{
		// Variables initiated
		$username = Auth::getUser();
		$user = $username->name;

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
		$share_to_beneficiary = $_POST['share_to_beneficiary'];
		$share_age = $_POST['share_age'];
		$issue = $_POST['issue'];
		$issue_age = $_POST['issue_age'];


		// Storing the variables in the table beneficiarys.
        Db::table('beneficiary')->insert(
    	['user' => $user, 'testator_1_relationship' => $testator1, 'testator_2_relationship' => $testator2, 'firstname' => $firstname, 'lastname' => $lastname, 'address_line_1' => $address1, 'address_line_2' => $address2, 'city' => $city, 'postcode' => $postcode, 'mobile_number' => $mobile, 'home_number' => $home, 'share_to_beneficiary' => $share_to_beneficiary, 'share_age' => $share_age, 'issue' => $issue, 'issue_age' => $issue_age,]
		);


        // Direct the user back to the beneficiary page.
		return Redirect::to('/beneficiary');

	}


}
?>