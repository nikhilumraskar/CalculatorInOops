<?php

class Dividor implements OperatorInterface
{
	public function run($result, $number)
	{
		return $result / $number;
	}
}

?>