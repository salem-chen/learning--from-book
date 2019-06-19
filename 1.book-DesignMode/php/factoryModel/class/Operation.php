<?php
/**
 * 工厂模式-计算器操作父类
 */
Class Operation{

	private $numberA = 0;
	private $numberB  = 0;		


	public function getNumberA(){
		return $this->numberA;
	}

	public function getNumberB(){
		return $this->numberB;
	}

	public function setNumberA($numberA){
		$this->numberA = $numberA;
	}

	public function setNumberB($numberB){
		$this->numberB = $numberB;
	}

	public function getResult(){
		$result  = 0;

		return $result;
	}

}
?>