<?php 

namespace Shapla\Aoe3\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Aoeform3 extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Professional Executor',
			'description' => 'Part 3 form'
		];
	}


	public function onSend()
	{
		$username = Auth::getUser();
		$user = $username->name;
		
		$twp_to_act = $_POST['twp_to_act'];
		$firmname = $_POST['firmname'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$postcode = $_POST['postcode'];
		$phone = $_POST['phone'];
		$option = $_POST['option'];


        Db::table('professional_executor')->insert(
    	['user' => $user, 'twp_to_act' => $twp_to_act, 'firmname' => $firmname, 'address_line_1' => $address1, 'address_line_2' => $address2, 'postcode' => $postcode, 'phone_number' => $phone, 'option' => $option]
		);

		return Redirect::to('/legacies-1');
	}


}
?>