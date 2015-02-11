<?php namespace Inkwell\HTML
{
	class esc
	{
		public function __invoke($data)
		{
			return is_string($data)
				? html::out(htmlentities($data, ENT_HTML5), 'esc')
				: $data;
		}
	}
}
