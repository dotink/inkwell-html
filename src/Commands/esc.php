<?php namespace Inkwell\HTML
{
	class esc
	{
		public function __invoke($data)
		{
			return is_string($data)
				? html::out(htmlspecialchars($data, ENT_HTML5 | ENT_QUOTES), 'esc')
				: $data;
		}
	}
}
