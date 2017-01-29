<?php

class Multiplier implements OperatorInterface
{
	public function run($result, $number)
	{
		return $result * $number;
	}
}

?>