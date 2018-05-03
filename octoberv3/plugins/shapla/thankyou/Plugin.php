<?php namespace Shapla\ThankYou;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\ThankYou\Components\Thankyou' => 'thankyou'
    	];
    }

    public function registerSettings()
    {
    }
}
