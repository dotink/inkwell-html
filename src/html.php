<?php namespace Inkwell\HTML
{
	class html
	{
		static private $loaded = array();

		static public function __callStatic($method, $args)
		{
			$class = __NAMESPACE__ . '\\' . $method;

			self::$loaded[$method] = new $class();

			return call_user_func_array(self::$loaded[$method], $args);
		}
	}
}
