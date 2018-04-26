<?php namespace Shapla\Payment;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Payment\Components\Paymentform' => 'paymentform'
    	];
    }

    public function registerSettings()
    {
    }
}
