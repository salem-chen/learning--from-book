<?php

/**
 * 加法类
 */
class OperationAdd extends Operation{

	public function getResult(){
		$result = 0;
		$result = $this->getNumberA() + $this->getNumberB;
	}

}
?>