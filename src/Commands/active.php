<?php namespace Inkwell\HTML
{
	class active
	{
		public function __invoke($a, $b, $output = 'active')
		{
			return $a == $b
				? html::out($output)
				: NULL;
		}
	}
}
