<?php namespace Inkwell\HTML
{
	class lower
	{
		public function __invoke($data)
		{
			return is_string($data)
				? html::out(strtolower($data), 'lower')
				: $data;
		}
	}
}
