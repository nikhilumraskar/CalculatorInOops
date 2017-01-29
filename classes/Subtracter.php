<?php

class Subtracter implements OperatorInterface
{
	public function run($result, $number)
	{
		return $result - $number;
	}
}

?>