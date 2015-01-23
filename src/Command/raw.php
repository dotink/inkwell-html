<?php namespace Inkwell\HTML
{
	use Closure;

	class raw
	{
		public function __invoke($data)
		{
			if ($data instanceof Closure) {
				return html::filter(__FUNCTION__, $data);
			}

			return is_string($data)
				? html_entity_decode($data, ENT_HTML5)
				: $data;
		}
	}
}
