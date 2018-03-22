<?php

namespace Mikielis\Gravatar\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * Class Gravatar
 * @package Mikielis\Gravatar\Facades
 */
class Gravatar extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'gravatar'; }

}