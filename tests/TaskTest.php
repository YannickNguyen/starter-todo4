<?php

use PHPUnit\Framework\TestCase;

require('../application/models/Task.php');

class TaskTest extends TestCase {

    public $task;

    public function setUp() {
        $this->task = new Task();
    }
	
    public function testSet1() {
        $key = 'task';
		
		$value = '0123456789012345678901234567890123456789012345678901234567890123456789012345678901234567890123456789';
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = '';
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 'code igniter is tragic';
		$this->task->__set($key, $value);
		$this->assertEquals($value, $this->task->$key);
    }
	
	public function testSet2() {
        $key = 'priority';

		$value = 4;
		try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = -1;
		try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 0;
		try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 1;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);

		$value = 3;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);
    }
    
    public function testSet3() {
        $key = 'size';
        
		$value = 4;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = -1;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 0;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 1;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);
		
		$value = 3;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);
		
    }
    
    public function testSet4() {
        $key = 'group';
		
        $value = 5;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }	
		
        $value = -1;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
        $value = 0;
        try {
            $this->task->__set($key, $value);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            $this->assertEquals(null, $this->task->$key);
        }
		
		$value = 1;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);
		
		$value = 4;
        $this->task->__set($key, $value);
        $this->assertEquals($value, $this->task->$key);
    }
    
}
