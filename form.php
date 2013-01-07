<?php

namespace Stephen-Hill\Data
{
	class Form
	{
		public function __construct()
		{
			$this->fields = new ArrayObject();
		}
		
		private $fields;
		
		public function addField(FormField $field)
		{
			$this->fields->append($field);
		}
	}
}
