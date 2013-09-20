<?php

namespace Gvlatko\LaravelXss;

use Illuminate\Support\Facades;

class LaravelXssFacade extends \Illuminate\Support\Facades\Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'xss'; }

}