<?php namespace Inkwell\HTML
{
	class esc
	{
		public function __invoke($data)
		{
			return is_string($data)
				? htmlentities($data, ENT_HTML5)
				: $data;
		}
	}
}
