<?php

include('../models/Task.php');
class TaskTest extends PHPUnit_Framework_TestCase {
    
	
	public $task;
	
    public function setUp() {
		$this -> task = new Task();
    }
	
    public function testSet() {
		$key = 'task';
		$value = '1';
		
		try {
			$this->task->__set($key, $value);
			$this->assertEquals($value, $this->task->$key);
		} catch(Exception $e) {
			var_dump($e->getMessage());
			$this->assertEquals(null, $this->task->$key);
		}
		
    }
}