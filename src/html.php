<?php namespace Inkwell\HTML
{
	class html
	{
		/**
		 *
		 */
		static private $filters = array();


		/**
		 *
		 */
		static private $loaded = array();


		/**
		 *
		 */
		static public function __callStatic($method, $args)
		{
			$class = __NAMESPACE__ . '\\' . $method;

			self::$loaded[$method] = new $class();

			return call_user_func_array(self::$loaded[$method], $args);
		}


		/**
		 *
		 */
		static public function out($data)
		{
			if (!self::$filters) {
				return html::esc($data);
			}

			foreach (self::$filters as $filter) {
				$data = $filter($data);
			}

			return $data;
		}


		/**
		 *
		 */
		static public function clear()
		{
			self::$filters = array();
		}


		/**
		 *
		 */
		static public function filter($filters, $callback = NULL)
		{
			settype($filters, 'array');

			foreach ($filters as $filter) {
				self::$filters[] = [__CLASS__, $filter];
			}

			if (is_callable($callback)) {
				$callback();
				self::clear();
			}
		}
	}
}
