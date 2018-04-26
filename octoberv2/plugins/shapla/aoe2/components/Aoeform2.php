<?php 

namespace Shapla\Aoe2\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Aoeform2 extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Appointment of Executor',
			'description' => 'Part 2 form'
		];
	}


	public function onSend()
	{
		$username = Auth::getUser();
		$user = $username->name;
		
		$testator1 = $_POST['testator1'];
		$testator2 = $_POST['testator2'];
		$title = $_POST['title'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$city = $_POST['city'];
		$postcode = $_POST['postcode'];
		$mobile = $_POST['mobile'];
		$home = $_POST['home'];
		$type = $_POST['type'];


        Db::table('executor')->insert(
    	['user' => $user, 'testator_1_relationship' => $testator1, 'testator_2_relationship' => $testator2, 'title' => $title, 'firstname' => $firstname, 'lastname' => $lastname, 'address_line_1' => $address1, 'address_line_2' => $address2, 'city' => $city, 'postcode' => $postcode, 'mobile_number' => $mobile, 'home_number' => $home, 'type' => $type]
		);

		return Redirect::to('/aoe2');
	}


}
?>