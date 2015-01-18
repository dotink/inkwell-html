<?php namespace Inkwell\HTML
{
	class per
	{
		public function __invoke($data, $callback)
		{
			foreach ($data as $i => $value) {
				$callback($i, $value);
			}
		}
	}
}
