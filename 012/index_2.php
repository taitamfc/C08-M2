<?php
	class CustomException extends Exception {
		//getFile
		//getLine
		//getMessage
		public function getCustomMessage(){
			$str = 'hey bro! There is a error';
			$str .= ' at file <b>'.$this->getFile().'</b>';
			$str .= ' at line <b>'.$this->getLine().'</b>';
			$str .= ' with message <b>'.$this->getMessage().'</b>';

			return $str;
		}

	}

	try{
		throw new CustomException("B is invalid !");
	}catch(Exception $e){
		file_put_contents('log.txt', $e->getCustomMessage() );
	}