<?php
class input{
	function test($ban){
		if($ban == ''){
			return false;
		}
		$bannedWord = ['PDD','淘宝','京东'];
		foreach($bannedWord as $date){
			if($ban == $date){
				return false;
			}
		}
		return true;
	}
}

$namecheck = new input();
?>
