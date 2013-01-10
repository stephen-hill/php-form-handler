<?php

namespace Stephen-Hill\Data
{
  class FormField
	{
		private $id;
		
		public function __construct($id)
		{
			if (is_string($id) === false)
			{
				throw new \Exception("\$id must be a string");
			}
			
			$this->id = $id;
		}
	}
}
