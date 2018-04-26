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


	public function onSend()
	{
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

        Db::table('legacies2')->insert(
    	['user' => $user, 'description_of_gift' => $description_of_gift, 'owned' => $owned, 'testator_1_relationship' => $testator1, 'testator_2_relationship' => $testator2, 'firstname' => $firstname, 'lastname' => $lastname, 'address_line_1' => $address1, 'address_line_2' => $address2, 'city' => $city, 'postcode' => $postcode, 'mobile_number' => $mobile, 'home_number' => $home]
		);

        return Redirect::to('/legacies-2');

	}


}
?>