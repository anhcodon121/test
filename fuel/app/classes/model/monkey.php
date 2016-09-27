<?php
class Model_Monkey extends Model_Crud
{
	protected static $_table_name = 'monkeys';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('name', 'Name', 'required|max_length[255]');
		$val->add_field('still_here', 'Still Here', 'required');

		return $val;
	}

}
