<?php namespace Inkwell\HTML
{
	use Traversable;

	class per
	{
		public function __invoke($data, $callback)
		{
			$data = $data ?: array();

			if (!is_object($data) || !$data instanceof Traversable) {
				settype($data, 'array');
			}

			foreach ($data as $i => $value) {
				$callback(html::out($i), html::out($value));
			}
		}
	}
}
