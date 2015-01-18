<?php namespace Inkwell\HTML
{
	class esc
	{
		public function __invoke($data)
		{
			return htmlentities($data, ENT_HTML5);
		}
	}
}
