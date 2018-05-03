<?php namespace Shapla\Book;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Shapla\Book\Components\Bookform' => 'bookform'
    	];
    }

    public function registerSettings()
    {
    }
}
