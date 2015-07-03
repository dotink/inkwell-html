<?php namespace Inkwell\HTML
{
	class lower
	{
		/**
		 * Make a value lowercase
		 *
		 * @access public
		 * @param mixed The value to make lowercase
		 * @return mixed The lowercased value, or original value if not a string
		 */
		public function __invoke($data)
		{
			return is_string($data)
				? html::out(strtolower($data), 'lower')
				: $data;
		}
	}
}
