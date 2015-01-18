<?php namespace Inkwell\HTML
{
	class raw
	{
		public function __invoke($data)
		{
			return html_entity_decode($data, ENT_HTML5);
		}
	}
}
