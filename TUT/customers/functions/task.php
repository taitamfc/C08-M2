<?php
	
	function getTasks(){
		$tasks = [
			new TodoItem('Hit the gym',false),
			new TodoItem('Pay bills',true),
			new TodoItem('Meet George',false),
		];

		return $tasks;
	}