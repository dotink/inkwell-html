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

			if (!isset(static::$loaded[$method])) {
				static::$loaded[$method] = new $class();
			}

			return call_user_func_array(static::$loaded[$method], $args);
		}


		/**
		 *
		 */
		static public function add($filters)
		{
			static::$loaded = array_merge(static::$loaded, $filters);
		}


		/**
		 *
		 */
		static public function out($data, $skip = array())
		{
			settype($skip, 'array');

			$filters = !static::$filters
				? ['esc' => [__CLASS__, 'esc']]
				: static::$filters;

			foreach ($filters as $name => $filter) {
				if (in_array($name, $skip)) {
					continue;
				}

				$data = $filter($data);
			}

			return $data;
		}


		/**
		 *
		 */
		static public function clear()
		{
			static::$filters = array();
		}


		/**
		 *
		 */
		static public function filter($filters, $data = NULL)
		{
			settype($filters, 'array');

			foreach ($filters as $filter) {
				static::$filters[] = [__CLASS__, $filter];
			}

			if (is_callable($data)) {
				$data = $data();
			} else {
				$data = static::out($data);
			}

			static::clear();
			return $data;
		}
	}
}
