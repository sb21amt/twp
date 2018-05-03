<?php 

namespace Shapla\FuneralArrangments\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Auth;
use Db;

class Funeralarrangmentsform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Funeral Arrangments Form',
			'description' => 'Part 1 form'
		];
	}

	// This retrieves the form inputs
	public function onSend()
	{
		// The inputs are stored in te variables

		$username = Auth::getUser();
		$user = $username->name;

		$arranged_with_1 = $_POST['arranged_with_1'];
		$arranged_with_2 = $_POST['arranged_with_2'];
		$reference_number_1 = $_POST['reference_number_1'];
		$reference_number_2 = $_POST['reference_number_2'];
		$funeral_fund_1 = $_POST['funeral_fund_1'];
		$funeral_fund_2 = $_POST['funeral_fund_2'];
		$donation_of_body_1 = $_POST['donation_of_body_1'];
		$donation_of_body_2 = $_POST['donation_of_body_2'];
		$donation_of_organs_1 = $_POST['donation_of_organs_1'];
		$donation_of_organs_2 = $_POST['donation_of_organs_2'];
		$organs_excluded_1 = $_POST['organs_excluded_1'];
		$organs_excluded_2 = $_POST['organs_excluded_2'];
		$cremation_required_1 = $_POST['cremation_required_1'];
		$cremation_required_2 = $_POST['cremation_required_2'];
		$burial_required_1 = $_POST['burial_required_1'];
		$burial_required_2 = $_POST['burial_required_2'];
		$service_destination_1 = $_POST['service_destination_1'];
		$service_destination_2 = $_POST['service_destination_2'];
		$burial_destination_1 = $_POST['burial_destination_1'];
		$burial_destination_2 = $_POST['burial_destination_2'];
		$ashes_1 = $_POST['ashes_1'];
		$ashes_2 = $_POST['ashes_2'];
		$ashes_destination_1 = $_POST['ashes_destination_1'];
		$ashes_destination_2 = $_POST['ashes_destination_2'];
		$service_requirements_1 = $_POST['service_requirements_1'];
		$service_requirements_2 = $_POST['service_requirements_2'];
		$family_flowers_1 = $_POST['family_flowers_1'];
		$family_flowers_2 = $_POST['family_flowers_2'];
		$donations_to_charity_1 = $_POST['donations_to_charity_1'];
		$donations_to_charity_2 = $_POST['donations_to_charity_2'];
		$notes_1 = $_POST['notes_1'];
		$notes_2 = $_POST['notes_2'];


		// This query inserts the variable into the funeral arrangements table.
        Db::table('funeral_arrangement')->insert(
    	['user' => $user, 'arranged_with_1' => $arranged_with_1, 'arranged_with_2' => $arranged_with_2, 'reference_number_1' => $reference_number_1, 'reference_number_2' => $reference_number_2, 'funeral_fund_1' => $funeral_fund_1, 'funeral_fund_2' => $funeral_fund_2, 'donation_of_body_1' => $donation_of_body_1, 'donation_of_body_2' => $donation_of_body_2, 'donation_of_organs_1' => $donation_of_organs_1, 'donation_of_organs_2' => $donation_of_organs_2, 'organs_excluded_1' => $organs_excluded_1, 'organs_excluded_2' => $organs_excluded_2, 'cremation_required_1' => $cremation_required_1, 'cremation_required_2' => $cremation_required_2, 'burial_required_1' => $burial_required_1, 'burial_required_2' => $burial_required_2, 'service_destination_1' => $service_destination_1, 'service_destination_2' => $service_destination_2, 'burial_destination_1' => $burial_destination_1, 'burial_destination_2' => $burial_destination_2, 'ashes_1' => $ashes_1, 'ashes_2' => $ashes_2, 'ashes_destination_1' => $ashes_destination_1, 'ashes_destination_2' => $ashes_destination_2, 'service_requirements_1' => $service_requirements_1, 'service_requirements_2' => $service_requirements_2, 'family_flowers_1' => $family_flowers_1, 'family_flowers_2' => $family_flowers_2, 'donations_to_charity_1' => $donations_to_charity_1, 'donations_to_charity_2' => $donations_to_charity_2, 'notes_1' => $notes_1, 'notes_2' => $notes_2]
		);

        // This directs the user to the thank you page.
		return Redirect::to('/thank-you');
	}


}
?>