<?php

class Task extends Entity {

	private $task;
	private $priority;
	private $size;
	private $group;
	
	public function setTask($task) {
		$this->task = $task;
	}
	
	public function setPriority($priority) {
		$this->priority = $priority;
	}
	
	public function setSize($size) {
		$this->size = $size;
	}
	
	public function setGroup($group) {
		$this->group = $group;
	}
	
}