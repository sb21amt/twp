<?php 
class Cms5ae1e1c5a59d7424508534_455c1a25029753ed0d068e4e45a42e01Class extends \Cms\Classes\PageCode
{
public function onStart()
{
	
$username = Auth::getUser();
$user = $username->name;


//##############################################################
// 					Appointment of Executor
//##############################################################

// Appointment of Executor - Part 1
$aoe = Db::table('appointment_of_executor')->where('user', '=', $user)->first();
$this['aoe'] = $aoe;


// Executor - Part 2

$executor = Db::table('executor')->where('user', '=', $user)->first();
$this['executor'] = $executor;


// Professional Executor - Part 3

$professional_executor = Db::table('professional_executor')->where('user', '=', $user)->first();
$this['professional_executor'] = $professional_executor;


//##############################################################
// 							Legacies
//##############################################################

// Legacies - Part 1
$legacies1 = Db::table('legacies1')->where('user', '=', $user)->first();
$this['legacies1'] = $legacies1;

// Legacies - Part 2
$legacies2 = Db::table('legacies2')->where('user', '=', $user)->first();
$this['legacies2'] = $legacies2;


//##############################################################
// 						Residual Estate
//##############################################################

// Residual Estate - Part 1
$estate1 = Db::table('residual_estate')->where('user', '=', $user)->first();
$this['estate1'] = $estate1;

// Beneficiary - Part 2
$estate2 = Db::table('beneficiary')->where('user', '=', $user)->first();
$this['estate2'] = $estate2;

// Reserved - Part 3
$estate3 = Db::table('reserve_beneficiary')->where('user', '=', $user)->first();
$this['estate3'] = $estate3;

//##############################################################
// 						Funeral Arrangements
//##############################################################

// Funeral Arrangement - Part 1
$funeral = Db::table('funeral_arrangement')->where('user', '=', $user)->first();
$this['funeral'] = $funeral;
    
}
}
