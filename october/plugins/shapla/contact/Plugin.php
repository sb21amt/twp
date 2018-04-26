<?php namespace Shapla\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Contact\Components\Contactform' => 'contactform'
    	];
    }

    public function registerSettings()
    {
    }
}

?>