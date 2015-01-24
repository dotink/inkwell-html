<?php namespace Inkwell\HTML
{
	use Closure;

	class money
	{
		/**
		 *
		 */
		private $currency = NULL;

		/**
		 *
		 */
		private $decimal = NULL;


		/**
		 *
		 */
		private $separator = NULL;

		/**
		 *
		 */
		public function __construct($currency = '$', $decimal = '.', $separator = ',')
		{
			$this->currency  = $currency;
			$this->decimal   = $decimal;
			$this->separator = $separator;
		}


		/**
		 *
		 */
		public function __invoke($data)
		{
			return is_string($data) || is_numeric($data)
				? $this->currency .  number_format($data, 2, $this->decimal, $this->separator)
				: $data;
		}
	}
}
