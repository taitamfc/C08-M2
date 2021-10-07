<?php
class TodoItem {
	public $task_name = '';
	public $task_status = false;
	public function __construct( $ts_task_name, $t_task_status ){
		$this->task_name 	= $ts_task_name;
		$this->task_status 	= $t_task_status;
	}
}