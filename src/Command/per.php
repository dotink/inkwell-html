<?php namespace Inkwell\HTML
{
	class per
	{
		public function __invoke($data, $callback)
		{
			$data = $data ?: array();

			settype($data, 'array');

			foreach ($data as $i => $value) {
				$callback(html::out($i), html::out($value));
			}
		}
	}
}
