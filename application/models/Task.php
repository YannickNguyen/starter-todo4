<?php

include('Entity.php');
class Task extends Entity {

	public $task;
	public $priority;
	public $size;
	public $group;
	
	
	public function setTask($task) {
		if(strlen($task) <= 64 && strlen($task) > 0) {
			$this->task = $task;
		} else {
			throw new Exception('Invaid task value');
		}
	}
	
	public function getTask() {
		return $this->task;
	}
	
	public function setPriority($priority) {
		if (is_int($priority) && $priority < 4 && $priority > 0) {
			$this->priority = $priority; 
		} else {
			throw new Exception('Invaid priority value');
		}
	}
	
	public function getPriority() {
		return $this->priority;
	}
	
	public function setSize($size) {
		if (is_int($size) && $size < 4 && $size > 0) {
			$this->size = $size; 
		} else {
			throw new Exception('Invaid size value');
		}
	}
	
	public function getSize() {
		return $this->size;
	}
	
	public function setGroup($group) {
		if (is_int($group) && $group < 5 && $group > 0) {
			$this->group = $group;
		} else {
			throw new Exception('Invalid group value');
		}
	}
	
	public function getGroup() {
		return $this->group;
	}
}