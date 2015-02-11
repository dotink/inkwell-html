<?php namespace Inkwell\HTML
{
	use Closure;

	class raw
	{
		public function __invoke($data)
		{
			if ($data instanceof Closure) {
				return html::filter('raw', $data);
			}

			return is_string($data)
				? html::out(html_entity_decode($data, ENT_HTML5), 'raw')
				: $data;
		}
	}
}
