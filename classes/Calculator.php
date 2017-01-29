<?php

class Calculator
{
	protected $result;
	protected $operator;

	public function set_operator(OperatorInterface $operator)
	{
		$this->operator = $operator;
	}

	public function calculate()
	{
		foreach (func_get_args() as $number) {
			$this->result = $this->operator->run($this->result, $number);
		}
	}

	public function get_result()
	{ 
		return $this->result; 
	}

	function __construct()
	{
		$this->result = 0;
	}
}

?>