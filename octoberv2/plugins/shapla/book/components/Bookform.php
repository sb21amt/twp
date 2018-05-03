<?php 

namespace Shapla\Book\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;

class Bookform extends ComponentBase

{
	public function componentDetails()
	{
		return 
		[
			'name' => 'Book Form',
			'description' => 'Simple book form'
		];
	}


	public function onSend()
	{
		$db = pg_connect("host=localhost port=5432 dbname=twp_db user=shapla password=twp_db_user");
		$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]',
		'$_POST[price]','$_POST[dop]')";
		$result = pg_query($query); 
	}

}
?>